<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Patient;
use Response; 

class detailsWebService extends Controller
{
    public function index() 
    { 
        $patients =  Patient::all() ; 
        return Response::json([
            'pdata'=>$patients->toArray()
        ],200); 
    }
    
    public function show($id)
    { 
       $patient= Patient::find($id); 
       if(!$patient)
       { 
           return Response::json([
               'error' => [
                   'message'=>'Patient does not exist'
               ]
           ],404);
       } 
       
       return Response ::json([
           'pdata'=> $patient->toArray()
       ],200); 
    }
}
