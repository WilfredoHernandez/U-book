<?php 
	require_once "../../../clases/conexion.php";
	require_once "../../../clases/Libros.php";
	require_once "../../../clases/Usuarios.php";

	$obj= new libros();
	$obj1= new usuarios();
	$datos=array(
	$_POST['id_libro'],
	$_POST['disponible'],
	$_POST['usuario'],
	$_POST['libro'],
	$_POST['autor'],
	$_POST['isbn']
	
	);

	
	echo $obj->actualizaLibro($datos);
	echo $obj1->historialRenta($datos)
 ?>