<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\User; 
use App\Patient; 
use Auth;
use Mail ; 


use Illuminate\Support\Facades\Input;



class UsersController extends Controller
{
   public function profile() 
    { //get model patients and send back to asif public hish school index
        $status= Auth::user()->verified; 
        $id=Auth::user()->id; 
        $user = User::whereId($id)->first();
        
       
     if ($status==0)
     { 
       // send email genertate toke 
       $token=str_random(10); 
       $user->token = $token; 
       $user->save(); 
       
    
        Mail::send('email.verify', ['token' => $token], function($message)  {
            $message->to(Auth::User()->email, Auth::User()->name);
                $message->subject('Verify your email address');
        });

       
      //  Mail::send('email.verify',['token' => $token], function($message) {
      //       $message->to(Auth::User()->email, 'TESTING EMAIL VERIFICATION') 
      //           ->subject('Verify your email address');
      //   });
       
      //  ////////////////
       
     }   
        
          return view('user.profile')->with('user', $user)->with('status',$status); 
	}
    
    
    public function confirm($token) 
    { 
             $user = User::whereToken($token)->first();
               if($user)
               {
             $user->verified=1 ; 
             $user->token=NULL ; 
             $user->save(); 
               }
             return redirect('home'); 

    }
    
   public function update() 
   { 
       $id= Auth::user() -> id ; 
       $user = User::whereId($id)->first() ; 
       $user->name = $_POST["name"]; 
       $user->email = $_POST["email"]; 
       $user->contact=$_POST["contact"]; 
       
       
       
       
       $user->save() ; 
  return redirect(action('UsersController@edit', $user->id))->with('status', 'The user Detials with id '.$id.' has been updated!');

   }
   
   public function edit()
   { 
               $id=Auth::user()->id; 
       $user= User::whereId($id)->first();  
     return view('user.edit')->with('user',$user);

   }
   
   	public function upload(){
            $id=Auth::user()->id; 
                   $user= User::whereId($id)->first();  

		if(Input::hasFile('file')){
            
			
			$file = Input::file('file');
			$file->move('uploads', $id.".jpg");
			
              return redirect(action('UsersController@edit', $user->id))->with('status', 'Image of id '.$id.' has been uploaded!');

		}
    
    
         

	}
  
  public function search() 
  { 
    return view ('user.search')->with('patient',NULL); 
  }
  
  public function searchPatient()
  { 
    // $name = $_POST['name']; 
    // $patient= Patient::where('name','like','%'.$name.'%')->get(); 
    // return view ('user.search')->with('patient',$patient); 
    
    // $age = $_POST['age']; 
    // $patient= Patient::where('age','<=', $age)->get(); 
    // return view ('user.search')->with('patient',$patient); 
    
    // $age = $_POST['gender']; 
    // $patient= Patient::where('sex','=', ''.$age.'')->get(); 
    // return view ('user.search')->with('patient',$patient); 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender']; 
    
    if ($name==NULL and $age==NULL)
    { 
         $patient= Patient::where('sex','=', ''.$gender.'')
         ->orderBy('name', 'asc')
         ->get(); 
    }
    
    if ($name!=NULL and $age==NULL)
    { 
      $patient= Patient::where('name','like','%'.$name.'%')
      ->where('sex','=', ''.$gender.'')
      ->orderBy('name', 'asc')

      ->get();
    }
    
    if ($name==NULL and $age!=NULL)
    { 
      $patient= Patient::where('age','<=', $age)
      ->where('sex','=', ''.$gender.'')
      ->orderBy('name', 'asc')
      ->get();
    }
    
    if ($name!=NULL and $age!=NULL)
    {
       $patient= Patient::where('name','like','%'.$name.'%')
      ->where('sex','=', ''.$gender.'')
      -> where('age','<=', $age)
      ->orderBy('name', 'asc')
      ->get();
    }
    
             return view ('user.search')->with('patient',$patient); 

  }
  
  public function contactAdmin() 
  { 
    $user= User::where('userType','=', 'admin')->get() ; 
    return view ('user.contact')->with('user',$user);
  }
  
  public function sendMessage() 
  { 
      
    $user= User::where('userType','=', 'admin')->get() ; 
    
     $msg=$_POST['message']; 
     $token=NULL; 
     Mail::send('email.verify', ['token' => $token], function($message)  {
            $message->to('valeednaveed@gmail.com', 'Waleed');
                $message->subject('Verify your email address');
        });
        
      return view ('user.contact')->with('user',$user)->with('status', 'Message has been sent to admins email id ');


  }
   
 
}

