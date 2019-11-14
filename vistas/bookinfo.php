<?php
 require_once "dependencies.php";
 require_once "../clases/conexion.php";
session_start();
if(isset($_SESSION['usuario'])){
?>

<?php

$c= new conectar();
$conexion=$c->conexion();
$sel= "SELECT * FROM rents WHERE usuario='$_SESSION[usuario]'";
$ejecutar= mysqli_query($conexion,$sel); 

$chequear_libros = mysqli_num_rows($ejecutar);
if ($chequear_libros ==1 ){

$sql="SELECT nombre_libro,
			autor,
			isbn
		from rents where usuario='$_SESSION[usuario]'";
$result=mysqli_query($conexion,$sql);

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
	<th>ISBN</th>
    <th>Author</th>
    <th>Options</th>
  </tr>

  <?php while($ver=mysqli_fetch_row($result)): ?>
  <tr>

	<td><?php echo $ver[0]; ?></td>
	<td><?php echo $ver[1]; ?></td>
    <td><?php echo $ver[2]; ?></td>
    <td></td>
  </tr>
  <?php endwhile; exit();}?>     
</table>

         
						
					</div>
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