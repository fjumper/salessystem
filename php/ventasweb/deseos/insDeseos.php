<?php

    require '../../../php/config.php';

    $IdUsuario = $_POST['IdUsuario'];
    $IdProducto = $_POST['IdProducto'];

    $con = new Connection();
    $cmd = $con->getConnection();
    $resultU = $cmd->query("CALL spInsertarDeseos ('$IdUsuario', '$IdProducto')");
    $cmd->close();
    if($resultU){
        echo 1;
    }
    else {
        echo 0;
    }

?>