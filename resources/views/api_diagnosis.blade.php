<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<script>

    $(function() {


   var people = [];

   $.getJSON('http://localhost:8000/api/patients', function(data) {
       $.each(data.pdata, function(i, f) {
          var tblRow = "<tr>" + "<td>" + f.id + "</td>" +
           "<td class=\"name\">" + f.name + "</td>" + "<td>" + f.diagnosis + "</td>" +"</tr>"
           $(tblRow).appendTo("#userdata tbody");
     });

   });

});
</script>



<style> 
.list {
  font-family:sans-serif;
}
td {
  padding:10px; 
  border:solid 1px #eee;
}

input {
  border:solid 1px #ccc;
  border-radius: 5px;
  padding:7px 14px;
  margin-bottom:10px
}
input:focus {
  outline:none;
  border-color:#aaa;
}
.sort {
  padding:8px 30px;
  border-radius: 6px;
  border:none;
  display:inline-block;
  color:#fff;
  text-decoration: none;
  background-color: #28a8e0;
  height:30px;
}
.sort:hover {
  text-decoration: none;
  background-color:#1b8aba;
}
.sort:focus {
  outline:none;
}
.sort:after {
  display:inline-block;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid transparent;
  content:"";
  position: relative;
  top:-10px;
  right:-5px;
}
.sort.asc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  content:"";
  position: relative;
  top:4px;
  right:-5px;
}
.sort.desc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #fff;
  content:"";
  position: relative;
  top:-4px;
  right:-5px;
}
</style>

</head>

<body>
    
 <div class="container"> 
    
                    <table class="table" id="userdata">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Diagnosis</th>
                                
                         
                            </tr>

                        </thead>
                        <tbody class="list">
                         
                                

                        </tbody>

                    </table>
                    </div> 




















</body>
</html>