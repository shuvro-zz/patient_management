<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home() 
    { 
        $name='waleed'; 
            return view('home')->with('var',$name) ;
    }
    
    public function about() 
    { 
    return view('about'); 
    } 
    
    public function contact() 
    { 
        return view('contact'); 
    
        
    }
    
    public function signup() 
    { 
    return view('signup'); 
    }
    
    public function login() 
    { 
        

    return view ('\login');
        
           
    }
    
    public function main() 
    { 
//               $list= DB :: select("SELECT name FROM users"); 
//        return view ('main')->with ('userDetails',$list) ;  
        
              $list= DB :: getDatabaseName() ; 
        return view ('main')->with ('userDetails',$list) ;  
        
    }
    
    public function patientDetails() 
    { 
       
        return view('api_details'); 
    }
    
    
   
    public function patientDiagnosis() 
    { 
        return view('api_diagnosis'); 
    }
    
    public function search() 
    { 
        return view('api_search');
    }
   
        
}
