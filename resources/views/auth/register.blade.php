@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"  required />

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"  required />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password"  required />

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation"  required />

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						
						 <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                 <input type="radio" name="gender" value="Male" checked> Male<br>
								 <input type="radio" name="gender" value="Female"> Female<br>
								 <input type="radio" name="gender" value="Other"> Other

                              
                            </div>
                        </div>
						
						

                       
						
						 <div class="form-group">
                            <label class="col-md-4 control-label"  required />Contact</label>

                            <div class="col-md-6">
                             <input type="text" class="form-control" name="contact">                              
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-md-4 control-label"  >Qualification</label>

                            <div class="col-md-6">
                             <input type="text" class="form-control" name="qualification" placeholder="Enter Qualification in single line" required />                              
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-md-4 control-label"  >Date Of Birth</label>

                            <div class="col-md-6">
                             <input type="date" class="form-control" name="dob" required />                              
                            </div>
                        </div>
						
						
						
						
						

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
