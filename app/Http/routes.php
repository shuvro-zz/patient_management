<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix'=>'api/'],function(){ 
    Route::resource ('details','detailsWebService'); 
    Route::resource ('diagnosis','diagnosisWebService'); 
    

}); 
 

Route::get('/details','PagesController@patientDetails'); 
Route::get('/diagnosis','PagesController@patientDiagnosis'); 
//Route::get('/searchp','PagesController@search'); 

Route::get('/x',function()
{ 
    return view ('search_details'); 
}); 

Route::post('/searchp',array('uses' => 'PatientApiController@searchPatient')); 



//
//{
////               $name=DB::getDatabaseName() ; 
////               return 'connected to '.$name ; 
//               
//               
//              $list= DB ::select("select * from users") ; 
//        //return view ('main')->with ('userDetails',$list) ; 
//               var_dump($list); 
//        
//           } 
//          ); 
//Route::post('/main','PagesController@main'); 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
    
    
   Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'UsersController@profile'
]); 
    //
    //add patient route area 
Route::get('/add', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@create'
]); 

Route::post('/add', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@store'
]); 


Route::get('/patients', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@index'
]); 


Route::get('/patient{slug?}', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@show'
]); 

Route::post('/patient{slug?}/edit', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@update'
]); 

Route::post('/patients/delete', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@deleteMultiple'
]); 


Route::get('/patient{slug?}/edit', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@edit'
]); 

Route::post('/patient{slug?}/delete', [
    'middleware' => 'auth',
    'uses' => 'PatientsController@delete'
]); 



//slug will be bound to the show action of our PatientsController.
// Simply put, when we visit ticket/558467e731bb8,
// Laravel automatically detects the slug (which is i.e 558467e731bb8) 
//and pass it to the action. 


// ******************* User Routes 




//email verification route 
Route::get('register/verify/{token}', [
  
    'uses' => 'UsersController@confirm'
]);

Route::get('/home', [
    'middleware' => 'auth',
    'uses' => 'UsersController@profile'
]);

Route::get('/search',[
    'middleware'=>'auth',
    'uses'=>'UsersController@search'
]);


Route::post('/search',[
    'middleware'=>'auth',
    'uses'=>'UsersController@searchPatient'
]);

Route::get('/contact',[
    'middleware'=>'auth',
    'uses'=>'UsersController@contactAdmin'
]);

Route::post('/contact',[
    'middleware'=>'auth',
    'uses'=>'UsersController@sendMessage'
]);




Route::get('/user/edit',[
'middleware' => 'auth', 
'uses' => 'UsersController@edit'
]);

Route::post('/user/edit',[
'middleware' => 'auth', 
'uses' => 'UsersController@update'
]);

Route::post('/upload',[
'middleware' => 'auth', 
'uses' => 'UsersController@upload'
]);

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
   
});
