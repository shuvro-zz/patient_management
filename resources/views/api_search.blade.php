
<head> 
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
    
    
    <script> 
    var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
    </script> 
    
    
    </head> 


<body>
<div id="users">
  <input class="search" placeholder="Search" />
  <button class="sort" data-sort="name">
    Sort by name
  </button>
  <table>
    <!-- IMPORTANT, class="list" have to be at tbody -->
    <tbody class="list">
      <tr>
        <td class="name">Jonny Stromberg</td>
        <td class="born">1986</td>
      </tr>
      <tr>
        <td class="name">Jonas Arnklint</td>
        <td class="born">1985</td>
      </tr>
      <tr>
        <td class="name">Martina Elm</td>
        <td class="born">1986</td>
      </tr>
      <tr>
        <td class="name">Gustaf Lindqvist</td>
        <td class="born">1983</td>
      </tr>
    </tbody>
  </table>

</div>
<script src="http://listjs.com/no-cdn/list.js"></script>
</body> 