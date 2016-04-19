
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

    <script> 
    
    function pass() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
	var user = document.getElementById("user").value;
	var cnic = document.getElementById("cnic").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match Please try again");
		document.getElementById("cnfrm").innerHTML = "Password Do not match";
		
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }

    if(user==null) 		{document.getElementById("cnfrmUser").innerHTML = "Username Required";
	ok=false; 
	}

   if(cnic==null) 	{	document.getElementById("cnfrmCnic").innerHTML = "Cnic Required";
   ok=false; 
   }

    return ok;
}
    
    </script>
</head>
    
<body>

    @include('user-navbar')
    
    
    @yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>