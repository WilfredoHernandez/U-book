<?php
 require_once "../dependencies.php";
session_start();
if(isset($_SESSION['usuario'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Public Finance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="../../img/icons/book.ico"/>
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/renta.css">

    <link rel="stylesheet" type="text/css" href="../../js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../js/alertifyjs/css/themes/default.css">


    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/alertifyjs/alertify.js"></script>
    <script src="../../js/funciones.js"></script>



</head>
<body>
	
	<div class="limiter">
		<div class="container-renta100">
			<div class="wrap-renta100">
				<div class="renta100-form-title" style="background-image: url(../assets/images/bg-01.jpg);">
					<span class="renta100-form-title-1">
                    </span>
                </div>

                <div class="container-book" >
                <img src="../../img/Public Finance.jpg" width="250px" height="300px">
                <br>
                    <p align="right" style="font-size:15px">Cost of rent: $100</p>
                    <p align="right" style="font-size:15px">Cost of fee: $5.30</p>
                   <strong> <p align="right" style="font-size:19px">Total: $10000</p></strong>
                </div>
                <div class="container-names">
                    <h1>Public Finance<strong></h1>
                    <br>
                    <i style="color:gray;">ISBN: 0078021685</i>
                    <br>
                    <hr class="divider my-4">
                    <br>

                    <form class="#" id="frmRent">
                    <div class="container-card">
                        <h2>Payment</h2>
                        <label for="frname">Accepted Cards</label>
                        <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
              
                        <label>Name on card:<span class="required">*</span></label>
                        <input type="text" name="card" id="card" placeholder="Ex. Jhon Monroe" style="background-color:lightblue">
                        <br><br>
                        <label>Card Number<span class="required">*</span></label>
                        <input type="text" name="number" id="number" placeholder="1111-2222-3333-4444" style="background-color:lightblue">
                        <br><br>
                        <label>Expiration Month<span class="required">*</span></label>
                        <input type="text" name="number" id="number" placeholder="1111-2222-3333-4444" style="background-color:lightblue">
                        <br><br>
                        <label>Expiration Year<span class="required">*</span></label>
                        <input type="text" name="year" id="year" placeholder="2019" style="background-color:lightblue">
                        <br><br>
                        <label>CVV<span class="required">*</span></label>
                        <input type="text" name="cvv" id="security" placeholder="123" style="background-color:lightblue">
                        <input type="text" name="disponible" id="disponible" value="0" style="background-color:lightblue" hidden>
                        <input type="text" name="id_libro" id="id_libro" value="12" style="background-color:lightblue" hidden>
                        <input type="text" name="libro" id="libro" value="Public Finance" style="background-color:lightblue" hidden>
                        <input type="text" name="autor" id="autor" value="Harvey S. Rosen" style="background-color:lightblue" hidden>
                        <input type="text" name="isbn" id="isbn" value="0078021685" style="background-color:lightblue" hidden>
                        <input type="text" name="usuario" id="usuario" value="<?php echo $_SESSION['usuario'] ?>" style="background-color:lightblue" hidden>
                        <br><br><br>

                        <div class="container-renta100-form-btn">
						<span class="renta100-form-btn" id="btnRenta">
							Pay 
                        </span>
                        
						<!-- <div class="g-signin2" data-onsuccess="onSignIn" ></div> -->
                    </div>
                    </form>
                    <br>
                </div>
			</div>
		</div>
	</div>
</body>
</html>
<?php

   } else{
       header("location:../../index.php");
  }

?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnRenta').click(function(){
				
			vacios=validarFormVacio('frmRent');

		if(vacios>0){
	alertify.error("All fields are required");
	return false;
}
datos=$('#frmRent').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../assets/process/rentarProcess.php",
			success:function(r){
                if(r!=1){
					alertify.success('Rent confirmed, please Login again.');
					setTimeout(function(){
                        
                                window.location="../login.php";
                                    
                                    },2500); 
                                    
                                    <?php session_destroy(); ?>
					
                } else{
                    alertify.error('The rent cannot be possible');
                }
			}
		});
	
	});
    });
	
</script>