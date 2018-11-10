<?php
    
    include 'config.php';

    $IdCategoria = $_POST['IdCategoria'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $resultD= $cmd->query("CALL spListarSubcategorias('$IdCategoria')");

    $html= "<option value='0'>Seleccione</option>";
	
	while($rowPr = $resultD->fetch_assoc())
	{
		$html.= "<option value='".$rowPr['IdSubCategoria']."'>".$rowPr['SubCategoria']."</option>";
	}
	
	echo $html;

?>