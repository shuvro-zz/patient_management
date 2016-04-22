<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="color:green;">Message From {{Auth::User()->name}} </h1> 
        <h2>Docotor's Query</h2>
        <h4>Message:</h4> 
        
        <div>
            
            {{ $token }}<br/>

        </div>

    </body>
</html>