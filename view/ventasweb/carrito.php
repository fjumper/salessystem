<?php

    session_start();

    require '../../php/ventasweb/get.php';
    $get = new get();
    if(isset($_SESSION['carrito'])) {
        if(isset($_POST['Id'])) {
            $arreglo = $_SESSION['carrito'];

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

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require '../../include/head.php'; ?>
    <title>Carrito de Compras</title>
</head>

<body>

        <?php require '../../include/ventasweb/header.php'; ?>
        <section class="container">
            <div class="card text-center">
                <div class="card-header text-uppercase">
                    <i class="fas fa-shopping-cart"></i> Carrito de Compras
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <?php
                            if(isset($_SESSION['carrito'])) {
                                $datos = $_SESSION['carrito'];
                                $Subtotal = 0;
                                $Peso = 0;
                                ?>
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Peso</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    for($i = 0; $i <count($datos); $i++) { 
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i + 1 ?></th>
                                        <td><img src="<?php echo $datos[$i]['Imagen']; ?>" style="width: 3rem;"></td>
                                        <td><p><?php echo $datos[$i]['Producto']; ?></p></td>
                                        <td>
                                            <select class="custom-select Cantidad" data-precio="<?php echo $datos[$i]['PrecioVenta']; ?>"
                                            data-id="<?php echo $datos[$i]['Id']; ?>">
                                            <?php
                                            for($c = 1; $c <= $datos[$i]['Stock']; $c++) { ?>
                                                <option value="<?php echo  $c; ?>" <?php 
                                                
                                                if($c == $datos[$i]['Cantidad']){
                                                    echo ' selected="selected"';
                                                }
                                                
                                                ?> ><?php echo $c; ?></option>
                                            <?php } ?>
                                            </select>
                                        </td>
                                        <td><p><?php echo 'S/. ' . number_format($datos[$i]['PrecioVenta'],2); ?></p></td>
                                        <td><p><?php echo $datos[$i]['Peso']. ' Kg'; ?></p> <i class="fas fa-exclamation-circle"></i></td>
                                        <td>
                                            <button type="button" class="btn btn-danger eliminar" data-id="<?php echo $datos[$i]['Id']; ?>"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>

                                <?php
                                    $Subtotal = $Subtotal + $datos[$i]['Cantidad']* $datos[$i]['PrecioVenta'];
                                    $Peso = $Peso + $datos[$i]['Peso'];
                            } ?>
                                </tbody>
                            <?php
                                } else {
                                    echo '<center><h2>El carrito de compras esta vacio</h2></center>';
                                }
                                
                                if(isset($Subtotal) && isset($i) && isset($Peso)){
                                    $Subtotal = $Subtotal;
                                    $item = $i;
                                    $Peso = $Peso;
                                } else {
                                    $Subtotal = 0;
                                    $item = 0;
                                    $Peso = 0;
                                }
                            ?>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    <div class="text-right">
                        <p>SUBTOTAL (<b><?php echo $item; ?></b> ITEMS): <b id="SubTotal"><?php echo 'S/. '.number_format($Subtotal,2); ?></b></p>
                        <a href="index.php" class="btn btn-info"><i class="fas fa-tags"></i> VER CATÁLOGO</a>
                        <a href="pago.php" class="btn btn-primary" id="Pagar"><i class="fas fa-money-bill-alt"></i> PROCEDER A
                            PAGAR</a>
                    </div>
                    <?php if($Peso >= 15) { ?>
                        <div class="text-left">
                            <p><i class="fas fa-exclamation-circle"></i> PARA ENVIOS A DOMICILIO</p>
                            <p>Se añadiran <b>S/.10.00</b> al precio total a pagar debido a que el producto supera los <b>15 Kg</b>
                                de envio gratuito.</p>
                        </div>
                    <?php } else if($Peso > 0) {?>
                        <div class="text-left">
                            <p><i class="fas fa-exclamation-circle"></i> PARA ENVIOS A DOMICILIO</p>
                            <p>Al no superar los <b>15 Kg</b> su envio es gratuito.</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php require '../../include/ventasweb/footer.php'; ?>
    <?php require '../../include/script.php'; ?>
</body>

</html>