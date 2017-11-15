<?php
	$server = "localhost";
	$user = "root";
	$password = "admin";//poner tu propia contraseña, si tienes una.
	$bd = "inglesp";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	
?>

