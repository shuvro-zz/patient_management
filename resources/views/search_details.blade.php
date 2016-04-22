    <html> 
    
    <head> 
        <title>Search </title> 
    </head> 
    
    <body> 
        
        
      <div class="col-md-4"> 
          <div class="form-group"> 
              <input type="text" id="search-input" class="form-control" 
              placehoder="search"
              onkeydown="down()"
              onkeyup="up()">
              </div> 
              <div class="col-md-12" id="search-results">
          </div> 
        
<script   src="https://code.jquery.com/jquery-1.9.1.js"   integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="   crossorigin="anonymous"></script>      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
        <script src="{{asset('search.js')}}"> </script> 
          
        
    </body> 
    
    
    </html> 
    