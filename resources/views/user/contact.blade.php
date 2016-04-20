@extends('layouts.app')

@section('title', 'Contact')

@section('content')



  <!--@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }} 
     
      @endif-->
     <section  style="color:#808080;">
	<form  method="post" >	
                     <input  type="hidden" name="_token" value="{!! csrf_token() !!}">
	  
        <div class="container"> 
              
		    <div class="row"> 
                   <div class="container">
  <h2>Form control: select</h2>
  <p>The form below contains two dropdown menus (select lists):</p>
  <form role="form">
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control">
       @foreach($user as $admin)
        <option username">{!!$admin->name!!}</option>
        
        @endforeach
        <!--loop -->
      </select>
      <br>
      <input type="text" name="message"" style="    height: 200px;
    width: 500px;"> 
                        <button type="submit" class="btn btn-info" >Send</button>

    </div>
  </form>
</div>
                  </div> 
            </div>    	
                                      
                           
            
	</form>
    
    <hr> 











@endsection