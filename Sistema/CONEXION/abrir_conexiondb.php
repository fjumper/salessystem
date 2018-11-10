<?php
	$host = "localhost";
	$user = "root";
	$contra = "";
	$dbname = "dbventas";

	/*$host = "db4free.net:3306";
	$user = "tallerinventario";
	$contra = "tallerinventario2018";
	$dbname = "dbinventario";*/
	
	$conexion = mysqli_connect($host,$user,$contra,$dbname);
	
	if (!$conexion){
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
 ?>