<?php

    include '../php/config.php';

    $IdProveedor = $_POST['proveedor'];
    $numerocuenta = $_POST['numerocuenta'];
    $nombrebanco = $_POST['nombrebanco'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $prueba = ("INSERT INTO cuentas_banco VALUES (null, '".$IdProveedor."', '".$numerocuenta."', '".$nombrebanco."')");
    $cmd->query($prueba);
    echo "<script> alert('Registro de  Nuevo Proveedor');   window.location.href='../RegistroProveedores.php';   </script>";
    //echo "<script> alert('$ubigeo');   window.location.href='../RegistroProveedores.php';   </script>";


?>