<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="vistas/assets/css/explorer.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<ul>
  <li><a class="shadow"></a></li>
  <span style="font-size:45px;cursor:pointer;padding:25px"  onclick="openNav()">&#9776;</span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
</ul>
<div class="container">
  
        <input type="text" placeholder="Look for ISBN...">
        <div class="search"></div>
      </div>

      



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  
</body>
</html>
