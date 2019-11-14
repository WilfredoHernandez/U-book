<?php
 require_once "dependencies.php";
session_start();
if(isset($_SESSION['usuario'])){
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>log</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-design.css">
  <link rel="stylesheet" href="assets/css/explorer.css">
  <link rel="stylesheet" href="assets/css/dropdown.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body style="background-image: url(assets/images/fondo-1.jpg); background-size:100%">

  <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br>
                <a onclick="myFunction()" class="dropbtn" style="font-size=30px">Categories</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Psychology</a>
    <a href="#">Math</a>
    <a href="#">Business</a>
    <a href="#">MIS</a>
    <a href="#">Finance</a>
    <a href="#">Biology</a>
    <a href="#">Chemistry</a>

  </div>

                
                <br><br><br><br><br>
                <a href="bookinfo.php">Your Pocket</a>
                <br><br><br><br>
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
        <i class="is"> ISBN: 978006040</i>
        <i class="ed"> Edition: 3rd Edition </i>
        <?php if(($_SESSION['macroeconomics'])=='1'){  ?>
        <div class="button_cont" align="center"><a class="example_a" href="books/Macroeconomics.php">Rent It!</a></div>
        <?php }; ?>
        <?php if(($_SESSION['macroeconomics'])=='0'){  ?>
        <div class="button_cont" align="center"><a class="example_a" disabled>Not Available!</a></div>
        <?php }; ?>
        </div>
    </div>
    <div>
        <div class="centering">
      <img src="../img/Public Finance.jpg" class="image">
      <strong> Public Finance</strong>
        <i> Author: Harvey S. Rosen </i>
        <i class="is"> ISBN: 0078021685  </i>
        <i class="ed"> Edition: 10th Edition </i>
        <?php if(($_SESSION['publicfinance'])=='1'){  ?>
        <div class="button_cont" align="center"><a class="example_a" href="books/Public_Finance.php">Rent It!</a></div>
        <?php }; ?>
        <?php if(($_SESSION['publicfinance'])=='0'){  ?>
        <div class="button_cont" align="center"><a class="example_a" disabled>Not Available!</a></div>
        <?php }; ?>
        </div>
    </div>
    <div>
    <div class="centering">
      <img src="../img/Personal Finance.jpg" class="image">
      <strong> Your Money our Your Life</strong>
        <i> Author: Vicki Robin </i>
        <i class="is"> ISBN: 1133595839  </i>
        <i class="ed"> Edition: 6th Edition </i>
        <?php if(($_SESSION['personalfinance'])=='1'){  ?>
        <div class="button_cont" align="center"><a class="example_a" href="books/Personal_Finance.php">Rent It!</a></div>
        <?php }; ?>
        <?php if(($_SESSION['personalfinance'])=='0'){  ?>
        <div class="button_cont" align="center"><a class="example_a" disabled>Not Available!</a></div>
        <?php }; ?>
       
        </div>
    </div>
      <div>
        <div class="centering">
      <img src="../img/entrepen.jpg" class="image">
      <strong> Entrepreneurial Finance</strong>
        <i> Author: Philip J. Adelman </i>
        <i class="is"> ISBN: 97801331405 </i>
        <i class="ed"> Edition: 6th Edition </i>
        <div class="button_cont" align="center"><a class="example_a" href="#" >Rent It!</a></div>
        </div>
</div>
        <div>
        <div class="centering">
      <img src="../img/information systems.jpg" class="image">
        <strong> Managment Information Systems </strong>
        <i> Author: Jane P. Laudon </i>
        <i class="is"> ISBN: 0619062509 </i>
        <i class="ed"> Edition: 15th Edition </i>
        <?php if(($_SESSION['management'])=='1'){  ?>
        <div class="button_cont" align="center"><a class="example_a" href="books/Management_Information_Systems.php">Rent It!</a></div>
        <?php }; ?>
        <?php if(($_SESSION['management'])=='0'){  ?>
        <div class="button_cont" align="center"><a class="example_a" disabled>Not Available!</a></div>
        <?php }; ?>
      </div>
</div>
<div>
        <div class="centering">
      <img src="../img/marketing managment.jpg" class="image">
      <strong> Marketing Management</strong>
        <i> Author: Dawn Jacobucci </i>
        <i class="is"> ISBN:1337271128</i>
        <i class="ed"> Edition: 5th Edition </i>
        <?php if(($_SESSION['marketing'])=='1'){  ?>
        <div class="button_cont" align="center"><a class="example_a" href="books/Marketing_Management.php">Rent It!</a></div>
        <?php }; ?>
        <?php if(($_SESSION['marketing'])=='0'){  ?>
        <div class="button_cont" align="center"><a class="example_a" disabled>Not Available!</a></div>
        <?php }; ?>
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
slidesToScroll: 2,


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

<script>

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
