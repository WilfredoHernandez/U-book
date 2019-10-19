<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-design.css">
  <link rel="stylesheet" href="assets/css/explorer.css">
  <style type="text/css">
   
  </style>
</head>
<body>
<div class="container">
<span style="font-size:45px;cursor:pointer; padding-left: 50px; padding-top: 50px"  onclick="openNav()">&#9776;</span>
<input type="text" placeholder="Look for ISBN...">
        <div class="search"></div>
        
</div>
  
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Categories</a>
                <a></a><a></a><a></a><a></a>
                <a href="#">Services</a>
                <a></a><a></a><a></a><a></a>
                <a href="#">Clients</a>
                <a></a><a></a><a></a><a></a>
                <a href="#">Contact</a>
                <a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a>
</div>            


<div>
      
      <section class="regular slider">
    <div>
      <img src="../img/Macro.jpg" width="130px" height="350px">
    </div>
    <div>
      <img src="../img/Public Finance.jpg" width="130px" height="350px">
    </div>
    <div>
      <img src="../img/Personal Finance.jpg" width="1px" height="350px">
    </div>
    <div>
      <img src="../img/entrepen.jpg" width="130px" height="350px">
    </div>
    <div>
      <img src="../img/icons/interchange.png" width="130px" height="350px">
    </div>
    <div>
      <img src="../img/icons/interchange.png" width="130px" height="350px">
    </div>

   </section>
<div>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="assets/css/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
 
      $(".regular").slick({

        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });

    });
</script>
</div>
</body>
</html>

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
