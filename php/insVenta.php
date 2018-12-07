<?php

    session_start();

    require 'config.php';

    $NumTarjeta = $_POST['NumTarjeta'];
    $MarcaTarjeta = $_POST['MarcaTarjeta'];
    $MM = $_POST['MM'];
    $AA = $_POST['AA'];
    $CVC = $_POST['CVC'];
    $IdCliente = $_POST['IdCliente'];
    $CostoAdicional = null;
    $Caducidad = $MM . "/". $AA;
    $TipoEntrega = $_POST['TipoEntrega'];
    $EmpleadoEntrega = null;
    $Direccion = $_POST['Direccion'];
    $Distrito = $_POST['Distrito'];
    $Provincia = $_POST['Provincia'];
    $Departamento = $_POST['Departamento'];
    $Ubigeo = null;
    $Coordenada = null;

    if ($TipoEntrega == 2) {
        if(isset($_SESSION['carrito'])) {
            $datos = $_SESSION['carrito'];
    
            $con = new Connection();
            $cmd = $con->getConnection();
            $resultT = $cmd->query("CALL spInsertarTarjeta ('$NumTarjeta', '$MarcaTarjeta', '$Caducidad', '$CVC')");
            $resultV = $cmd->query("CALL spInsertarVentaWeb ('$IdCliente', '$CostoAdicional')");
            for($i = 0; $i <count($datos); $i++) {
                $IdProducto = $datos[$i]['Id'];
                $Cantidad = $datos[$i]['Cantidad'];
                $cmd->query("CALL spInsertarDetalleVentaWeb ('$IdProducto', '$Cantidad')");
            }
            
            $resultUC = $cmd->query("CALL spListarUbiCooCliente('$IdCliente')");
            $rowUC = $resultUC->fetch_row();
            $Ubigeo = $rowUC[0];
            $Coordenada = $rowUC[1];
            $cmd->close();

            $cmd = $con->getConnection();
            $resultEW = $cmd->query("CALL spInsertarEntregaWeb('$TipoEntrega', '$Ubigeo', '$Direccion', '$Coordenada')");
            $cmd->close();
            if ($resultEW && $resultT && $resultV) {
                // Se registro
                echo 1;
            } else {
                // No se registro
                echo 0;
            }
        } else {
            // No hay Productos
            echo 2;
        }
    }
?>