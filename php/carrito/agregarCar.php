<?php

    session_start();

    require '../php/get.php';

    $get = new get();
    if(isset($_POST['Id'])) {
        $Id = $_POST['Id'];
        if(isset($_SESSION['carrito'])) {
            $arreglo = $_SESSION['carrito'];
            $encontrado = false;
            $numero = 0;

            for ($i=0; $i < count($arreglo); $i++) { 
                if ($arreglo[$i]['Id'] == $Id) {
                    $encontrado = true;
                    $numero = $i;
                }
            }

            if ($encontrado == false) {
                $resultn = $get->getSP("spListarProductoId('$Id')");
                while($row = $resultn->fetch_array()) {
                    $Producto = $row['Producto'];
                    $Imagen = $row['Imagen'];
                    $PrecioVenta = $row['PrecioVenta'];
                    $Peso = $row['Peso'] / 1000;
                    $Stock = $row['Cantidad'];
                }
                $resultn->free_result();
                $datosNuevos = array(
                    'Id' => $Id,
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
        } else {

            $result = $get->getSP("spListarProductoId('$Id')");
            while($row = $result->fetch_array()) {
                $Producto = $row['Producto'];
                $Imagen = $row['Imagen'];
                $PrecioVenta = $row['PrecioVenta'];
                $Peso = $row['Peso'] / 1000;
                $Stock = $row['Cantidad'];
            }
            $result->free_result();        
            
            $arreglo[] = array(
                'Id' => $Id,
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