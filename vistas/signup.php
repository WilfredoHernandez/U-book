<?php

require_once "dependencies.php";
require_once "../clases/Usuarios.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="435808170988-a84mke6nufousp20iv4d8otc1i5485ka.apps.googleusercontent.com">
	<link rel="icon" type="image/png" href="assets/images/icons/edit.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="frmSignups" id="frmSignup" >
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Name:</span>
						<input class="input100" type="text" name="nombre" id="nombre" placeholder="Enter you Name">
						<span class="focus-input100"></span>
                    </div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Last Name:</span>
						<input class="input100" type="text" name="apellido" id="apellido" placeholder="Enter you Name">
						<span class="focus-input100"></span>
                    </div>
                   
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email: (username)</span>
						<input class="input100"  type="email" name="usuario" id="usuario" placeholder="Enter Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" >
						<span class="focus-input100"></span>
                    </div>
                    

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
						


					<div class="container-login100-form-btn">
						<span class="login100-form-btn" id="signupS">
							Sign Up
						</span>
						<!-- <div class="g-signin2" data-onsuccess="onSignIn" ></div>

					</div>
					</div>
				</form>

			</div>
			
		</div>
	</div>
	


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#signupS').click(function(){

			vacios=validarFormVacio('frmSignup');

		if(vacios>0){
	alertify.error("All fields are required");
	return false;
}

		datos=$('#frmSignup').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"assets/process/registrarUsuario.php",
			success:function(r){
                if(r==1){
					alertify.success('Registration Succesful');
					setTimeout(function(){
								window.location="login.php";
									},340); 
					
                } else{
                    alertify.error('User Already Exist');
                }
			}
		});
	});
    });
</script>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log(profile.getId()); 
  console.log(profile.getEmail());
  window.location="explorer.php"
}

</script>
