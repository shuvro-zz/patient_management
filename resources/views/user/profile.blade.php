@extends('layouts.app')

@section('title', 'View all users')
@section('content')

@if($status==0)
<h1 style="text-align:center; ">Hello ,<span style="color:green; ">{!!$user->name!!}</span>  Please Check you Email for Verification</h1> 
@else 

<style> 
.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style> 
	
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-4">
                        
                        
                                           <br> 
                                           <br> 
                                         <img src="\uploads\{!!$user->id.".jpg"!!}" alt="Upload Photo" onerror="this.src='\site-content\images\home.jpg'" style="

                                                       object-fit: cover;
                                                          width: 250px;
                                                          height:250px;
                                                           border: 1px solid #ddd;
                                                            border-radius: 4px;
                                                            padding: 5px;



                                                                                 ">
                                        
                        
                        
                        
                        
                        <!--<img src="\uploads\{!!$user->id.".jpg"!!}"  alt="" class="img-rounded img-responsive" />-->
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <h1>
						{!!$user->name!!}</h1>
                        <small><cite title="Lahore, Pakistan">Lahore, Pakistan <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-user"></i>{!! $user->userType !!}
                            </br> 
                             <i class="glyphicon glyphicon-gift"></i>{!! $user->dob!!}
                            </br> 
                            <i class="glyphicon glyphicon-envelope"></i>{!! $user->email !!}
                             </br>
                            <i class="glyphicon glyphicon-globe"></i><a href="www.artkaratjewellers.com">www.artkaratjewellers.com</a>
                            </br> 
                            <i class="glyphicon glyphicon-earphone"></i>{!! $user->contact !!}
                                </br> 
                            <i class="glyphicon glyphicon-education"></i>{!! $user->qualification!!}
                              </br> 
                            <i class="glyphicon glyphicon-user"></i>{!! $user->gender !!}
                           
                            
                            </p>
                           
                        <!-- Split button -->
                        <div class="btn-group">
                            <!--<button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="">Google +</a></li>
                                <li><a href="">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>-->
                           
                            <a href="{{ url('/user/edit') }}" class="btn btn-info">Edit</a>
                            
                            
                        </div>
                                                    <br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	
@endif	
	
	
	
	
	
	
@endsection