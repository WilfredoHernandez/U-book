<?php

require_once "dependencies.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="435808170988-a84mke6nufousp20iv4d8otc1i5485ka.apps.googleusercontent.com">
	<link rel="icon" type="image/png" href="assets/images/icons/login.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="frmLogins" id="frmLogin">
                   
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" >Username:</span>
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="Enter Email">
						<span class="focus-input100"></span>
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<span class="login100-form-btn" id="btnLogin">
							Login 
						</span>
						<!--- <div class="g-signin2" data-onsuccess="onSignIn" ></div> --->
					</div>
				</form>
			</div>
		</div>
	</div>
	<p id="id" style="display:none;"> </p>
	<p id="email" style="display:none;"> </p>


</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('#btnLogin').click(function(){

			vacios=validarFormVacio('frmLogin');

		if(vacios>0){
	alertify.error("All fields are required");
	return false;
}
		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"assets/process/loginProcess.php",
			success:function(r){
                if(r==1){
					alertify.success('Login Succesful');
					setTimeout(function(){
								window.location="explorer.php";
									},340); 
					
                } else{
                    alertify.error('Username or password is incorret');
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


