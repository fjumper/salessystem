<?php

    include '../php/config.php';

    $NombreTienda = $_POST['nombreTienda'];
    $Direccion = $_POST['Direccion'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $latitud = $_POST['Latitud'];
    $longitud = $_POST['Longitud'];
    
    

    $con = new Connection();
    $cmd = $con->get_connection();
    $cmd->query("INSERT INTO ubigeos VALUES (null, $Departamento, $Provincia, $Distrito)");
    $result=$cmd->query("SELECT IdUbigeo FROM ubigeos ORDER BY IdUbigeo DESC LIMIT 1");
    $row = $result->fetch_assoc();
    $ubigeo = $row['IdUbigeo'];

    $cmd->query("INSERT INTO coordenadas VALUES (null, $latitud, $longitud)");
    $result2=$cmd->query("SELECT IdCoordenada FROM coordenadas ORDER BY IdCoordenada DESC LIMIT 1");
    $row2 = $result2->fetch_assoc();
    $coordenada = $row2['IdCoordenada'];
    
    $prueba = "INSERT INTO tiendas VALUES (null,'".$NombreTienda."', '".$ubigeo."','".$Direccion."','".$coordenada."')";
    echo $prueba;
    $cmd->query($prueba);
    //echo "<script> alert('Registro de Nueva Tienda');   window.location.href='../RegistroTienda.php';   </script>";
    //echo "<script> alert('$ubigeo');   window.location.href='../RegistroProveedor.php';   </script>";

?>