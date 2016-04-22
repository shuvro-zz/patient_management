<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Patient;
use App\diagnosis;
use App\medicalHistory;
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
               'comments'=> $request->get('comments'),
               'slug'=>$slug
           )

        ) ;

        $patient->save() ; //saving to database

        $data = array(
        'patient' => $slug,
    );



         // getting diagnosis and save to data base
           $diagnosis = new diagnosis (
               array(
                   'pid'=> $patient->id,
                   'diagnosis' => $_POST['diagnosis']

               )
           );
           $diagnosis->save();

           //saving medical history
           $mh = new medicalHistory (
               array(
                    'pid'=> $patient->id,
                    'bloodGroup' => $_POST['bloodgroup'],
                    'disease' => $_POST['disease'],
                    'allergy' => $_POST['allergy'],
                    'medicine' => $_POST['medicine']


               )
           );
           $mh->save() ;

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
    $id=$patients->id;

    $d = diagnosis :: whereId($id)->first();
    $mh=medicalHistory :: whereId($id)->first();

    return view('patient.show')->with('patient',$patients)->with('d',$d)->with('mh',$mh)->with('type',$type);
}




public function update($slug, PatientFormRequest $request)
{
    $patient = Patient::whereSlug($slug)->first();
      $id= $patient->id;
    $d= diagnosis::whereId($id)->first() ;
    $mh= medicalHistory::whereId($id)->first() ;
    


               $patient->name =  $request->get('name');
               $patient->email = $request->get('email');
               $patient->contact = $request->get('contact');
               $patient->CNIC = $request->get('cnic');
               $patient->age = $request->get('age');
               $patient->sex = $request->get('gender');
               $mh->bloodGroup = $request->get('bloodgroup');
               $mh->disease = $request->get('disease');
               $mh->allergy = $request->get('allergy');
               $mh->medicine = $request->get('medicine');
               $d->diagnosis = $request->get('diagnosis');
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
    $id= $patients->id;
    $d= diagnosis::whereId($id)->first() ;
    $mh= medicalHistory::whereId($id)->first() ;

    return view('patient.edit')->with('patient',$patients)->with('d',$d)->with('mh',$mh);//sending $ patient to view show

}

public function delete($slug)
{
    $patients = Patient::whereSlug($slug)->first();
    $id= $patients->id;
    $diagnosis= diagnosis::whereId($id)->first() ;
    $mh= medicalHistory::whereId($id)->first() ;

    $mh->delete() ;
    $diagnosis->delete();
    $patients->delete();


    return redirect('/patients')->with('status', 'The Patient '.$slug.' has been deleted!');


}

public function deleteMultiple()
{

        if (isset($_POST['checked'])){

  $deletePatient= $_POST['checked'];

      foreach ($deletePatient as $del) {
        $patients = Patient::whereId($del)->first();
        $diagnosis= diagnosis::whereId($del)->first() ;
        $mh= medicalHistory::whereId($del)->first() ;
        $patients->delete();
        $mh->delete() ;
        $diagnosis->delete();
      }

    return redirect('/patients')->with('status', 'Selected Patients has been deleted');
        }

    return redirect('/patients')->with('status', 'No Patient has been selected');



}




}
