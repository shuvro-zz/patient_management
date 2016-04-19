@extends('layouts.app')

@section('title', 'Edit a Patient')

@section('content')


<form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="container"> 
    <div class="row"> 
             
                <div class="col-md-8">
                    <div class="well well bs-component">

                        
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger" style="text-align: center; font-weight: bolder; >{{ $error }}</p>
                            @endforeach

                            @if (session('status'))
                                <div class="alert alert-success" style="text-align: center; font-weight: bolder; ">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <fieldset>
                                <legend>Edit Patient</legend>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" value="{!! $patient->name !!}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="email" name="email" value="{!! $patient->email !!}">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Contact</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="contact" name="contact" value="{!! $patient->contact !!}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">CNIC</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="cnic" name="cnic" value="{!! $patient->CNIC !!}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Age</label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="age" name="age" value="{!! $patient->age !!}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Gender</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="gender" name="gender" value="{!! $patient->sex !!}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="bloodgroup" name="bloodgroup" value="{!! $patient->bloodGroup!!}">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="content" class="col-lg-2 control-label">Allergy</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="allergy" name="allergy">{!! $patient->allergy !!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="content" class="col-lg-2 control-label">Medicine</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="medicine" name="medicine">{!! $patient->medicine !!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="content" class="col-lg-2 control-label">Diagnosis</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="diagnosis" name="diagnosis">{!! $patient->diagnosis !!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="content" class="col-lg-2 control-label">Comments</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="comments" name="comments">{!! $patient->comments !!}</textarea>
                                    </div>
                                </div>

                               

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </fieldset>
                        
                    </div>

                </div>
            

                <div class="col-md-4"> 
                
                 <div class="row"> 
                

                <div class="col-md-3 col-md-offset-2"> 
                
                <img src="\uploads\{!!$patient->slug.".jpg"!!}" style="  
                           
                    object-fit: cover;
                    width: 200px;
                    height: 200px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 5px;
   
    
                "> 

                </div>
                
                </div>
               
                <br> 
                <br> 
                
                <div class="well well bs-component">
                 <div class="row"> 
                
                
                <div class="col-md-8"> 
                <h1>File Upload</h1>
                
                    <label>Select image to upload:</label>
                    <input type="file" name="file" id="file">
            
                
                </div>
                </div>
                </div>
                </div>
    </div> 
    <div class="row"> 
                
    </div>
</div> 
</form>
@endsection