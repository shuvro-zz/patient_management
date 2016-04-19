<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="color:red;">Hello {{Auth::User()->name}} </h1> 
        <h2>Verify Your Email Address</h2>
        <h4>(Testing Application. Please Forward This Email to bluntdagger.faker@gmail.com)</h4> 
        
        <div>
            Thanks for creating an account with my app.
            Please follow the link below to verify your email address
            {{ URL::to('register/verify/' . $token) }}.<br/>

        </div>

    </body>
</html>