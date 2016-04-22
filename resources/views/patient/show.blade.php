@extends('layouts.app')

@section('title', 'View a patient')
@section('content')
    <form method="post" action="{!! action('PatientsController@delete', $patient->slug) !!}">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="container col-md-6 col-md-offset-3">
            <div class="well well bs-component">
                <div class="content">

                               <img src="\uploads\{!!$patient->slug.".jpg"!!}" alt="Upload Photo" onerror="this.src='\site-content\images\home.jpg'" style="

                                                       object-fit: cover;
                                                          width: 200px;
                                                          height: 200px;
                                                           border: 1px solid #ddd;
                                                            border-radius: 4px;
                                                            padding: 5px;



                                                                                 ">

                    <h1 class="header" style="font-weight: bold; color:green;">{!! $patient->name !!}</h1>
                     <p style="font-size: larger;"> <span style="font-weight: bold;">Email: </span> {!! $patient->email !!} </p>

                    <p style="font-size: larger;"> <span style="font-weight: bold;">Contact: </span>{!! $patient->contact !!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">CNIC: </span>{!! $patient->CNIC!!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Age: </span>{!! $patient->age !!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Gender: </span>{!! $patient->sex !!} </p>
                    <h2 style="font-weight: bold;">Patient Medical History </h2>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Blood Group: </span>{!! $mh->bloodGroup !!} </p>

                    <p style="font-size: larger;"> <span style="font-weight: bold;">List of Disease: </span>{!! $mh->disease !!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">List of Allergies: </span>{!! $mh->allergy !!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Medicines: </span> {!! $mh->medicine !!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Diagnosis: </span>{!! $d->diagnosis!!} </p>
                    <p style="font-size: larger;"> <span style="font-weight: bold;">Comments: </span>{!! $patient->comments !!} </p>



                <a href="{!! action('PatientsController@edit', $patient->slug) !!}" class="btn btn-info">Edit</a>
                @if($type=='admin')
                <button type="submit" class="btn" style="background-color: red; color: white; ">Delete</button>
                @endif



        </div>




            </div>
    </div>
</form>
@endsection
