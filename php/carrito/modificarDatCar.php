<?php

    session_start();

    $arreglo = $_SESSION['carrito'];
    $Subtotal=0;
    $numero = 0;
    for($i = 0; $i < count($arreglo); $i++) {
        if($arreglo[$i]['Id'] == $_POST['Id']) {
            $numero = $i;
        }
    }

    $arreglo[$numero]['Cantidad'] = $_POST['Cantidad'];
    for($i = 0; $i < count($arreglo); $i++) {
        if($arreglo[$i]['Cantidad'] == null){
            $arreglo[$i]['Cantidad'] = 1;
        }
        $Subtotal = $Subtotal + ($arreglo[$i]['Cantidad']* $arreglo[$i]['PrecioVenta']);
    }

    $_SESSION['carrito'] = $arreglo;

    echo number_format($Subtotal,2);

?>