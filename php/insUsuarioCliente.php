<?php

    require 'config.php';

    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $UserPass = $_POST['UserPass'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $Latitud = $_POST['Latitud'];
    $Longitud = $_POST['Longitud'];
    $IdCliente = $_POST['IdCliente'];
    $Nombre = $_POST['Nombre'];
    $ApellidoP = $_POST['ApellidoP'];
    $ApellidoM = $_POST['ApellidoM'];
    $Genero = $_POST['Genero'];
    $EstadoCivil = $_POST['EstadoCivil'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $RazonSocial = $_POST['RazonSocial'];
    $DireccionEntrega = $_POST['DireccionEntrega'];
    $DireccionFactura = null;

    $con = new Connection();
    $cmd = $con->getConnection();
    $resultU = $cmd->query("CALL spInsertarUsuarios ('$Email', '$UserName', '$UserPass')");
    $resultUb = $cmd->query("CALL spInsertarUbigeos ('$Departamento', '$Provincia', '$Distrito')");
    $resultC = $cmd->query("CALL spInsertarCoordenadas ('$Latitud', '$Longitud')");
    $resultCl = $cmd->query("CALL spInsertarClientes('$IdCliente', '$Nombre', '$ApellidoP', '$ApellidoM', '$Genero', '$EstadoCivil', '$FechaNacimiento', '$RazonSocial', '$DireccionEntrega')");
    $cmd->close();

    if($resultU && $resultUb && $resultC && $resultCl) {
        echo "<script type='text/javascript'>
        alert('Bien. Fue registrado con exito');
        window.location.href='../view/index.php';
        </script>";
    }
  

?>