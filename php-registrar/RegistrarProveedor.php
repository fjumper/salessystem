<?php

    include '../php/config.php';

    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $RUC = $_POST['RUC'];
    $RazonSocial = $_POST['RazonSocial'];
    $Categoria = $_POST['Categoria'];
    $Celular = $_POST['Celular'];
    $Email = $_POST['Email'];
    $Direccion = $_POST['Direccion'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $cmd->query("INSERT INTO ubigeos VALUES (null, $Departamento, $Provincia, $Distrito)");
    $result=$cmd->query("SELECT IdUbigeo FROM ubigeos ORDER BY IdUbigeo DESC LIMIT 1");
    $row = $result->fetch_assoc();
    $ubigeo = $row['IdUbigeo'];
    $prueba = "INSERT INTO proveedores VALUES ('".$RUC."','".$RazonSocial."', '".$ubigeo."','".$Categoria."','".$Celular."',
        '".$Email."','".$Direccion."')";
    echo $prueba;
    $cmd->query($prueba);
    echo "<script> alert('Registro de  Nuevo Proveedor');   window.location.href='../RegistroProveedor.php';   </script>";
    //echo "<script> alert('$ubigeo');   window.location.href='../RegistroProveedor.php';   </script>";

?>