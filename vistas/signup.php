<?php

require_once "dependencies.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/edit.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
<!--===============================================================================================-->
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

				<form class="frmSignup" id="frmSignup">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Full name:</span>
						<input class="input100" type="text" name="name" placeholder="Enter you Name">
						<span class="focus-input100"></span>
                    </div>
                   
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email: (username)</span>
						<input class="input100" type="text" name="username" placeholder="Enter Email">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Age:</span>
						<input class="input100" type="date" name="age" id="age">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

						
			<!--		<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="signupS">
							Login
						</button>
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
			if(vacios > 0){
				alertify.error("All fields are required");
				return false;
			} 


return true;
		
	});
	});
</script>