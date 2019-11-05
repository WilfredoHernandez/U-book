<?php
require_once "dependencies.php";

session_start();
if(isset($_SESSION['usuario'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-design.css">
  <link rel="stylesheet" href="assets/css/explorer.css">
  <style type="text/css">
   
  </style>
</head>
<body style="background-image: url(assets/images/fondo-explorer.jpg); background-size:100%">

    

  <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br>
                <a>Categories</a>
                
                <br><br><br><br><br><br><br><br><br>
                <a href="assets/process/salir.php" onclick="signOut();">Sign out</a>


</div>   
<div class="container">
<span style="font-size:45px;cursor:pointer; position: absolute; left: 30px; top: 8px"  onclick="openNav()">&#9776;</span>

<input type="text" placeholder="Look for ISBN...">
        <div class="search"></div>

        <p> Welcome back <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellido']; ?>! </p>
        
</div>        
<br><br><br>

<div class="slide-section">
      
      <section class="regular slider">
    <div>
        <div class="centering">
      <img src="../img/Macro.jpg" class="image">
        <strong> Macroeconomic Theory and Policies</strong>
        <i> Author: William H. Branson </i>
        <i class="is"> ISBN: 9780060409326</i>
        <i class="ed"> Edition: 3rd Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
        </div>
    </div>
    <div>
        <div class="centering">
      <img src="../img/Public Finance.jpg" class="image">
      <strong> Public Finance</strong>
        <i> Author: Harvey S. Rosen </i>
        <i class="is"> ISBN: 0078021685  </i>
        <i class="ed"> Edition: 10th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
        </div>
    </div>
    <div>
    <div class="centering">
      <img src="../img/Personal Finance.jpg" class="image">
      <strong> Your Money our Your Life</strong>
        <i> Author: Vicki Robin </i>
        <i class="is"> ISBN: 1133595839  </i>
        <i class="ed"> Edition: 6th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
        </div>
    </div>
      <div>
        <div class="centering">
      <img src="../img/entrepen.jpg" class="image">
      <strong> Entrepreneurial Finance</strong>
        <i> Author: Philip J. Adelman </i>
        <i class="is"> ISBN: 9780133140514 </i>
        <i class="ed"> Edition: 6th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
        </div>
</div>
        <div>
        <div class="centering">
      <img src="../img/information systems.jpg" class="image">
        <strong> Managment Information Systems </strong>
        <i> Author: Wilfredo Hernandez </i>
        <i class="is"> ISBN: 12343124512 </i>
        <i class="ed"> Edition: 6th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
      </div>
</div>
<div>
        <div class="centering">
      <img src="../img/marketing managment.jpg" class="image">
      <strong> Marketing Management</strong>
        <i> Author: Wilfredo Hernandez </i>
        <i class="is"> ISBN: 12343124512 </i>
        <i class="ed"> Edition: 6th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="renta.php" target="_blank">Rent!</a></div>
        </div>
</div>
   </section>
</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="assets/css/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      
      window.mobilecheck = function() {
           var check = false;
           if(window.innerWidth<720){
               check=true;
           }
           return check;
         }
         if(window.mobilecheck()){
          $(".regular").slick({

infinite: true,
slidesToShow: 1,
slidesToScroll: 1,


});
         } else {

          $(".regular").slick({

infinite: true,
slidesToShow: 3,
slidesToScroll: 1,


});
         }
      
    });
</script>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<?php

   } else{
       header("location:../index.php");
  }
?>