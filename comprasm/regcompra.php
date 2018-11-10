<?php 
 require_once "dependencias.php"; 
	require_once "conexion.php";

	$conexion=conexion();

	$idpedidoc=$_POST['idpedidocompras'];
	$idtipopago=$_POST['idtipopago'];
	$numcomprobante=$_POST['numcomprobante'];
	$montocompra=$_POST['montocompra'];



	$sql="CALL guardarcompra('$idpedidoc','$idtipopago','$numcomprobante','$montocompra',NOW())";

	echo mysqli_query($conexion,$sql);


 ?>

