@extends('layouts.app')

@section('title', 'Contact')

@section('content')



  <!--@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }} 
     
      @endif-->
     <section  style="color:#808080;">
       @if($user==NULL)
       <h1 style="color:green; "> Email Sent </h1> 
       @else
	<form  method="post" >	
                     <input  type="hidden" name="_token" value="{!! csrf_token() !!}">
	  
        <div class="container"> 
              
		    <div class="row"> 
                   <div class="container">
  <h1>Contact Administator</h1>
  <p>He will get back to you within 24 hours</p>
  <form role="form">
    <div class="form-group">
      <select class="form-control" name="userid">
       @foreach($user as $admin)
        <option value="{!!$admin->id!!}">{!!$admin->name!!}</option>
        
        @endforeach
        <!--loop -->
      </select>
      <br>
      <!--<input type="text" name="message"" style="    height: 200px;
    width: 500px;"> -->
    <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required="" data-validation-required-message="Please enter a message." aria-invalid="true"></textarea>
                       <br> 
                        <button type="submit" class="btn btn-info" >Send</button>

    </div>
  </form>
</div>
                  </div> 
            </div>    	
                                      
                           
            
	</form>
  @endif
    
    <hr> 











@endsection