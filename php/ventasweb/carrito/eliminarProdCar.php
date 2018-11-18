<?php

    session_start();

    $arreglo = $_SESSION['carrito'];
    for($i = 0; $i < count($arreglo); $i++) {
        if($arreglo[$i]['Id'] != $_POST['Id']) {
            $datosNuevos[] = array (
                'Id' => $arreglo[$i]['Id'],
                'Producto' => $arreglo[$i]['Producto'],
                'Imagen' => $arreglo[$i]['Imagen'],
                'PrecioVenta' => $arreglo[$i]['PrecioVenta'],
                'Peso' => $arreglo[$i]['Peso'],
                'Cantidad' => $arreglo[$i]['Cantidad']
            );
        }
    }

    if(isset($datosNuevos)) {
        $_SESSION['carrito'] = $datosNuevos;
    }else{
        unset($_SESSION['carrito']);
        echo '0';
    }

?>