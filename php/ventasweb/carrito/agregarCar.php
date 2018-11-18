<?php

    session_start();

    require '../../php/ventasweb/get.php';
    $get = new get();
    if(isset($_SESSION['carrito'])) {
        if(isset($_POST['Id'])) {
            $arreglo = $_SESSION['carrito'];
            $encontrado = false;
            $numero = 0;

            for ($i=0; $i < count($arreglo); $i++) { 
                if ($arreglo[$i]['Id'] == $_POST['Id']) {
                    $encontrado = true;
                    $numero = $i;
                }
            }

            if ($encontrado == false) {
                $resultn = $get->getProductosId($_POST['Id']);
                while($row = $resultn->fetch_array()) {
                    $Producto = $row['Producto'];
                    $Imagen = $row['Imagen'];
                    $PrecioVenta = $row['PrecioVenta'];
                    $Peso = $row['Peso'] / 1000;
                    $Stock = $row['Cantidad'];
                }
                $resultn->free_result();
                $datosNuevos = array(
                    'Id' => $_POST['Id'],
                    'Producto' => $Producto,
                    'Imagen' => $Imagen,
                    'PrecioVenta' => $PrecioVenta,
                    'Peso' => $Peso,
                    'Stock' => $Stock,
                    'Cantidad' => 1
                );
                array_push($arreglo, $datosNuevos);
                $_SESSION['carrito'] = $arreglo;
            }
        }
    } else {
        if(isset($_POST['Id'])) {

            $result = $get->getProductosId($_POST['Id']);
            while($row = $result->fetch_array()) {
                $Producto = $row['Producto'];
                $Imagen = $row['Imagen'];
                $PrecioVenta = $row['PrecioVenta'];
                $Peso = $row['Peso'] / 1000;
                $Stock = $row['Cantidad'];
            }
            $result->free_result();        
            
            $arreglo[] = array(
                'Id' => $_POST['Id'],
                'Producto' => $Producto,
                'Imagen' => $Imagen,
                'PrecioVenta' => $PrecioVenta,
                'Peso' => $Peso,
                'Stock' => $Stock,
                'Cantidad' => 1
            );
            $_SESSION['carrito'] = $arreglo;
        }
    }

?>