<?php

    require 'get.php';

    $IdProvincia = $_POST['IdProvincia'];

    $get = new get();
    $resultD = $get->getSP("spListarDistritos('$IdProvincia')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowPr = $resultD->fetch_assoc())
	{
		$html.= "<option value='".$rowPr['IdDistrito']."'>".$rowPr['Distrito']."</option>";
	}
	
	echo $html;

?>