<?php
    session_start();

    require '../../php/ventasweb/get.php';

    $UserName = $_POST['UserName'];
    $UserPass = $_POST['UserPass'];

    $get = new get();
    $result = $get->getLogin($UserName, $UserPass);

    while ($row = $result->fetch_assoc()){
        $IdUsuario = $row['IdUsuario'];
        $Email = $row['Email'];
        $UserName = $row['UserName'];
    }

    if(isset($IdUsuario)){

        $arreglo[] = array(
            'Id' => $IdUsuario,
            'UserName' => $UserName,
        );
        $_SESSION['usuario'] = $arreglo;
        echo $_SESSION['usuario'];
    } else {
        echo '0';
    }

?>