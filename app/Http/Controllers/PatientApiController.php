<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Patient;
use Response; 

class PatientApiController extends Controller
{
    
    public function searchPatient() 
    { 
        $key = $_POST['keywords']; 
        $patient= Patient::all(); 
        $searchp = new \Illuminate\Database\Eloquent\Collection(); 
        
        foreach($patients as $p )
        { 
            if(Str::contains(Str::lover($u->name),Str::lover($key)))
            $searchp->add($u); 
        }
        
        return view ('search_details')->with('searchp',$searchp); 
    }
    
    // public function index() 
    // { 
    //     $patients =  Patient::all() ; 
    //     return Response::json([
    //         'pdata'=>$patients->toArray()
    //     ],200); 
    // }
    
    // public function show($id)
    // { 
    //    $patient= Patient::find($id); 
    //    if(!$patient)
    //    { 
    //        return Response::json([
    //            'error' => [
    //                'message'=>'Patient does not exist'
    //            ]
    //        ],404);
    //    } 
       
    //    return Response ::json([
    //        'pdata'=> $patient->toArray()
    //    ],200); 
    // }
    
  
    
    
}
