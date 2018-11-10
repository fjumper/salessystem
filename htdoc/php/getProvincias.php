<?php

    include 'config.php';

    $IdDepartamento = $_POST['IdDepartamento'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $resultP = $cmd->query("CALL spListarProvincias('$IdDepartamento')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowP = $resultP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['IdProvincia']."'>".$rowP['Provincia']."</option>";
	}
	
	echo $html;

?>