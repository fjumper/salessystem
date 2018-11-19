<?php

    require '../../php/ventasweb/get.php';

    $IdDepartamento = $_POST['IdDepartamento'];

    $get = new get();
    $resultP = $get->getSP("spListarProvincias('$IdDepartamento')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowP = $resultP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['IdProvincia']."'>".$rowP['Provincia']."</option>";
	}
	
	echo $html;

?>