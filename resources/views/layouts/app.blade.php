<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>pms</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    </style>
    

		<style>

			

			
			input[type="submit"]{
				background:#0098cb;
				border:0px;
				border-radius:5px;
				color:#fff;
				padding:10px;
				margin:20px auto;
			}
            
            input[type="file"]{
                align-content:center; 
				background:green;
				border:0px;
				border-radius:5px;
				color:#fff;
				padding:10px;
				margin:20px auto;
			}

		</style>
        

</head>


<!--<select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select>

// Activate Selectize
<script>
	$(document).ready(function(){
	    $('#searchbox').selectize();
	});
</script>-->


<body id="app-layout" >
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <!-- Branding Image -->
                <a class="navbar-brand" href="">
                NY Medical Center 
                </a>
            </div>
            



            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
 @if (Auth::guest())
                      <ul class="nav navbar-nav">
        <li class="{{ Request::is('home') ? 'active' : '' }}" ><a href="\home">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     <li class="{{ Request::is('login') ? 'active' : '' }}" ><a href="\login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <li class="{{ Request::is('register') ? 'active' : '' }}" ><a href="\register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                   </ul>

@else 

   @if (Auth::User()->verified==1)

                            @if (Auth::User()->userType == 'admin') 
                            <ul class="nav navbar-nav">
                                <li class="{{ Request::is('home') ? 'active' : '' }}" ><a href="\home">Home</a></li>
                                            <li class="{{ Request::is('add') ? 'active' : '' }}" ><a href="\add">Add</a></li> 
                                            <li class="{{ Request::is('patients') ? 'active' : '' }}" ><a href="\patients">Patients</a></li> 
                                            
                                            
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                           
                                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                        <li><a href="{{ url('/user/edit') }}"><i class="fa fa-cog fa-fw"></i>Edit Profile</a></li>
                                                    </ul>
                                                </li>
                                        </ul>
                            @else 
                                <ul class="nav navbar-nav">
                                <li class="{{ Request::is('home') ? 'active' : '' }}" ><a href="\home">Home</a></li>
                                            <li class="{{ Request::is('add') ? 'active' : '' }}" ><a href="\add">Add</a></li> 
                                            <li class="{{ Request::is('patients') ? 'active' : '' }}" ><a href="\patients">View</a></li> 
                                            <li class="{{ Request::is('search') ? 'active' : '' }}" ><a href="\search">Search</a></li> 

                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                        <li><a href="{{ url('/user/edit') }}"><i class="fa fa-cog fa-fw"></i>Edit Profile</a></li>
                                                    </ul>
                                                </li>
                                        </ul>
                                @endif
        
                       
		        @else 
                             <ul class="nav navbar-nav">
                            
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                    </ul>
                                                </li>
                                        </ul>
         
               @endif 
@endif 


                
              
                   
                
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
