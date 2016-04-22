@extends('layouts.app')

@section('title', 'Edit a user')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8">
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif


                <fieldset>
                    <legend>Edit user</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" value="{!! $user->name !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="email" name="email" value="{!! $user->email !!}">
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Contact</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="contact" name="contact" value="{!! $user->contact !!}">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="title" class="col-lg-3 control-label">Qualification</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="qualification" name="qualification" value="{!! $user->qualification !!}">
                        </div>
                    </div>




                   <div class="container">
			<div class="content">



			</div>
		</div>



                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="container col-md-8 col-md-offset-2 text-center">
    <h1>File Upload</h1>
				<form action="{{ URL::to('/upload') }}" method="post" enctype="multipart/form-data">
					<label>Select image to upload:</label>
				    <input type="file" name="file" id="file">
				    <input type="submit" value="Upload" name="submit">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
				</form>
                </div>

                        </div>
                         <div class="col-md-4">
                          <img src="\uploads\{!!$user->id.".jpg"!!}"  style="

                                                       object-fit: cover;
  width: 200px;
  height: 200px;
   border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;


    ">
                            </div>
                    </div>
                </div>

@endsection
