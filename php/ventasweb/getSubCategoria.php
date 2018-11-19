<?php

    require '../../php/ventasweb/get.php';

    $IdCategoria = $_POST['IdCategoria'];

    $get = new get();
    $resultP = $get->getSP("spListarSubcategorias('$IdCategoria')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowP = $resultP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['IdSubCategoria']."'>".$rowP['SubCategoria']."</option>";
	}
	
	echo $html;

?>