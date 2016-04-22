@extends('layouts.app')

@section('title', 'View all patients')
@section('content')
 <form method="post" action="{!! action('PatientsController@deleteMultiple') !!}" >
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">






                    <h1 style="text-align: center; font-weight:bolder;"> Patients </h2>
                    <hr>

                @if (session('status'))
                <div class="alert alert-success" style="text-align: center; font-weight: bolder; ">
                 {{ session('status') }}
                </div>
@endif
                @if ($patient->isEmpty())
                    <p> There is no Patient.</p>
                @else
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Picture<th> 
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>CNIC</th>
                                <th>Age</th>
                                <th>Gender</th>

                             <!--    <th>Disease</th>
                                <th>Allergies</th>
                                <th>Medicine</th>
                                <th>Diagnosis</th>
                                <th>Comments</th> -->
                                @if($type=='admin')
                                <th><button type="submit" class="btn btn" style="background-color:red; color:white;">Delete</button></th>
                                @endif
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($patient as $patients)

                                <tr>
                                        <td>
                                         <img src="\uploads\{!!$patients->slug.".jpg"!!}" alt="Upload Photo" onerror="this.src='\site-content\images\home.jpg'" style="

                                                       object-fit: cover;
                                                          width: 60px;
                                                          height:60px;
                                                           border: 0.2px solid #ddd;
                                                            
                                                            padding: 5px;



                                                                                 ">
                                         </td>
                                    <td>{!! $patients->id !!} </td>
                                    <td>
                                    <a href="{!! action('PatientsController@show', $patients->slug) !!}">
                                    {!! $patients->name !!}
                                   </a>
                                    </td>
                                 
                                    <td>{!! $patients->email !!}</td>
                                    <td>{!! $patients->contact !!} </td>
                                    <td>{!! $patients->CNIC !!}</td>
                                    <td>{!! $patients->age !!}</td>
                                    <td>{!! $patients->sex !!}</td>
                                  
                                   <!--  <td>{!! $patients->disease !!}</td>
                                    <td>{!! $patients->allergy !!}</td>
                                    <td>{!! $patients->medicine !!}</td>
                                    <td>{!! $patients->diagnosis !!}</td>
                                    <td>{!! $patients->comments !!}</td> -->
                                    @if($type=='admin')
                                    <td><input type="checkbox" value="{!!$patients->id!!}" name="checked[]"><td>
                                    @endif
                                </tr>

                            @endforeach

                        </tbody>

                    </table>
                    </div>

                @endif



</form>
@endsection
