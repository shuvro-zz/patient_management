<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\diagnosis;
use Response; 

class diagnosisWebService extends Controller
{
     public function index() 
    { 
        $d =  diagnosis::all() ; 
        return Response::json([
            'pdata'=>$d->toArray()
        ],200); 
    }
    
    public function show($id)
    { 
       $d= diagnosis::find($id); 
       if(!$d)
       { 
           return Response::json([
               'error' => [
                   'message'=>'diagnosis does not exist'
               ]
           ],404);
       } 
       
       return Response ::json([
           'pdata'=> $d->toArray()
       ],200); 
    }
}
