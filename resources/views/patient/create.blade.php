@extends('layouts.app')

@section('title','Create')
@section('content')
    <div class="container col-md-6 col-md-offset-3 " >
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                <fieldset >

                    <h1 class="text-center">Add New Patient </h1>
                    <hr>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-lg-2 control-label">Contact</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control"  pattern="^\d{11}" id="contact" placeholder="Enter Phone Number (format: xxxxxxxxxxx):" name="contact" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cnic" class="col-lg-2 control-label">CNIC</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control"  pattern="^\d{5}-\d{7}-\d{1}$" id="cnic" placeholder="Enter CNIC (format: xxxxx-xxxxxxx-x):" name="cnic">
                        </div>
                    </div>

                <div class="form-group">
                        <label for="age" class="col-lg-2 control-label">Age</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="col-lg-2 control-label">Gender</label>

                          <input type="radio" name="gender" id="gender" value="male" checked> Male
                          <input type="radio" name="gender" id="gender" value="female"> Female
                          <input type="radio" name="gender" id="gender" value="other"> Other
                    </div>

                    <div class="form-group">
                        <label for="medicine" class="col-lg-2 control-label">Medicines</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="medicine" name="medicine"></textarea>

                        </div>
                    </div>

                    <hr>
                    <h1 class="text-center">Medical History</h1> 
                    <hr> 
                    <div class="form-group">
                        <label for="bloodgroup" class="col-lg-2 control-label">Blood Group</label>
                          <div class="col-lg-10">
                     <select class="form-control" id="bloodgroup"  name="bloodgroup">
                      <option value="">Select Blood Group</option>
                      <option value="A+">A+</option>
                      <option value="B+">B+</option>
                      <option value="O+">O+</option>
                      <option value="AB+">AB+</option>
                      <option value="A-">A-</option>
                      <option value="B-">B-</option>
                      <option value="O-">O-</option>
                      <option value="AB-">AB-</option>
                      <option value="unknown">Unknown</option>
                    </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="disease" class="col-lg-2 control-label">Diseases</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="disease" name="disease"></textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="allergy" class="col-lg-2 control-label"> Allergies</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="allergy" name="allergy"></textarea>

                        </div>
                    </div>

                    

                   

                    <div class="form-group">
                        <label for="comments" class="col-lg-2 control-label">Comments</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="comments" name="comments"></textarea>

                        </div>
                    </div>
                    <hr> 
                    <h1 class="text-center">Diagnosis</h1> 
                    <hr> 
                    
                     <div class="form-group">
                        <label for="diagnosis" class="col-lg-2 control-label">Diagnosis</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="diagnosis" name="diagnosis"></textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                        @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
                </fieldset>
            </form>
        </div>
    </div>
@endsection
