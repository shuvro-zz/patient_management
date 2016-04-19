<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth; 
use App\Patient; 
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PatientFormRequest; 
use Illuminate\Support\Facades\Mail;
class PatientsController extends Controller
{
    public function create() 
    { 
        return view ('patient.create'); 
    }
    
    public function store(PatientFormRequest $request)
    { 
      
       $slug = uniqid() ; 
       //function to generate a unique ID based on the microtime
       $patient = new Patient (
           array ( 
               'name'=> $request->get('name'), 
               'email'=> $request->get('email'),
               'contact'=> $request->get('contact'),
               'CNIC'=> $request->get('cnic'),
               'age'=> $request->get('age'), 
               'sex'=> $request->get('gender'),
               'bloodGroup' => $request->get('bloodgroup'),
               'disease'=> $request->get('disease'),
               'allergy'=> $request->get('allergy'),
               'medicine'=> $request->get('medicine'),
               'diagnosis'=> $request->get('diagnosis'),
               'comments'=> $request->get('comments'),
               'slug'=>$slug
           )
           
        ) ; 
        
        $patient->save() ; //saving to database
        
        $data = array(
        'patient' => $slug,
    );


        
            return redirect('/add')->with('status', 'Your patient has been created!');

    }
    
    public function index() 
    { //get model patients and send back to asif public hish school index
        
        $type=Auth::User()->userType; 
        $patient = Patient::all(); 
        return view ('patient.index')->with('patient',$patient)->with('type',$type); 
    }
    
  public function show($slug)
{
      $type=Auth::User()->userType; 
        $patient = Patient::all(); 
    $patients = Patient::whereSlug($slug)->first();
    return view('patient.show')->with('patient',$patients)->with('type',$type); //sending $ patient to view show
}




public function update($slug, PatientFormRequest $request)
{
    $patient = Patient::whereSlug($slug)->first();
  
               
               $patient->name =  $request->get('name'); 
               $patient->email = $request->get('email');
               $patient->contact = $request->get('contact');
               $patient->CNIC = $request->get('cnic');
               $patient->age = $request->get('age');
               $patient->sex = $request->get('gender');
               $patient->bloodGroup = $request->get('bloodgroup');
               $patient->disease = $request->get('disease');
               $patient->allergy = $request->get('allergy');
               $patient->medicine = $request->get('medicine');
               $patient->diagnosis = $request->get('diagnosis');
               $patient->comments = $request->get('comments');

                  if(Input::hasFile('file')){
            
      
      $file = Input::file('file');
      $file->move('uploads', $slug.".jpg");
      
              // return redirect(action('PatientController@update', $slug))->with('status', 'Image of id '.$slug.' has been uploaded!');

    }
    
    $patient->save();
    return redirect(action('PatientsController@edit', $patient->slug))->with('status', 'The Patient Detials with id '.$slug.' has been updated!');

}

  public function edit($slug)
{
    $patients = Patient::whereSlug($slug)->first();
    
    return view('patient.edit')->with('patient',$patients);//sending $ patient to view show
  
}

public function delete($slug)
{
    $patients = Patient::whereSlug($slug)->first();
    $patients->delete();
    
    return redirect('/patients')->with('status', 'The Patient '.$slug.' has been deleted!');
    

}

public function deleteMultiple() 
{ 
 
        if (isset($_POST['checked'])){
          
  $deletePatient= $_POST['checked'];
      
      foreach ($deletePatient as $del) {
        $patients = Patient::whereId($del)->first(); 
        $patients->delete(); 
      }

    return redirect('/patients')->with('status', 'Selected Patients has been deleted'); 
        }

    return redirect('/patients')->with('status', 'No Patient has been selected'); 


 
}


 

}

