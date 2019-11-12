<?php
 require_once "dependencies.php";
session_start();
if(isset($_SESSION['usuario'])){

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
	<link rel="stylesheet" type="text/css" href="assets/css/bookinfo.css">

</head>
<body>
	
		<div class="container-book100">
			<div class="wrap-book100">
      <div class="login100-form-title" style="background-image: url(assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Book Information
					</span>
				</div>
				<table>
  <tr>
	<th>Book Name</th>
	<th>Book Image</th>
    <th>Author</th>
    <th>ISBN</th>
  </tr>
  <tr>
	<td>Strategic Management</td>
	<td><img src="../img/Strategic Management.jpg" alt="" border=3 height=140 width=120></td>
    <td>Frank T. Rothaermel</td>
    <td>1260092372</td>
  </tr>
</table>
                   
						
					</div>
				</form>
			</div>
		</div>
	</div>



</body>
</html>

<?php

   } else{
       header("location:../index.php");
  }

?>