<?php 
	require_once "../../../clases/conexion.php";
	require_once "../../../clases/Libros.php";
	$obj= new libros();
	$datos=array(
	$_POST['id_libro'],
	$_POST['disponible']
	);
	
	echo $obj->actualizaLibro($datos);
 ?>