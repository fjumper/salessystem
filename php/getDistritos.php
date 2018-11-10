<?php

    include 'config.php';

    $IdProvincia = $_POST['IdProvincia'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $resultD= $cmd->query("CALL spListarDistritos('$IdProvincia')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowPr = $resultD->fetch_assoc())
	{
		$html.= "<option value='".$rowPr['IdDistrito']."'>".$rowPr['Distrito']."</option>";
	}
	
	echo $html;

?>