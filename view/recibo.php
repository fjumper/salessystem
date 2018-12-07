<?php require '../php/recibo.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require '../include/head.php'; ?>
    <title>Recibo</title>
</head>

<body>
    <?php require '../include/header.php'; ?>
    <div class="container">
        <section>
            <div class="mt-5 border p-5">
                <div>
                    <h3 class="text-center">BOLETA ELECTRÓNICA</h3>
                </div>
                <div class="form-row text-left ml-3 mt-5">
                    <?php while ($rowDC = $resultDC->fetch_assoc()) { ?>
                    <div class="col-md-8">
                        <p>Señor(a): <b><?php echo $rowDC['ApNom']; ?></b></p>
                    </div>
                    <div class="col-md-4">
                        <p>DNI: <b><?php echo $rowDC['IdCliente']; ?></b></p>
                    </div>
                    <div class="col-md-8">
                        <p>Dirección: <b><?php echo $rowDC['Direccion']; ?>, <?php echo $rowDC['Distrito']; ?>, <?php echo $rowDC['Provincia']; ?>, <?php echo $rowDC['Departamento']; ?></b></p>
                    </div>
                    <div class="col-md-4">
                        <p>Fecha de Emisión: <b><?php echo date("d/m/Y") ?></b></p>
                    </div>
                    <?php } ?>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <?php
                            if(isset($_SESSION['carrito'])) {
                                $datos = $_SESSION['carrito'];
                                $PesoT = 0;
                                $Total = 0;       
                        ?>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio U.</th>
                                <th scope="col">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i = 0; $i <count($datos); $i++) { ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i + 1 ?>
                                </th>
                                <td><img src="<?php echo $datos[$i]['Imagen']; ?>" style="width: 3rem;"></td>
                                <td>
                                    <p>
                                        <?php echo $datos[$i]['Producto']; ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $datos[$i]['Cantidad']; ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo 'S/. ' . number_format($datos[$i]['PrecioVenta'],2); ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php echo 'S/. ' . number_format($datos[$i]['PrecioVenta'] * $datos[$i]['Cantidad'],2); ?>
                                        <p>
                                <td>
                            </tr>

                            <?php
                                            $Total = $Total + $datos[$i]['PrecioVenta'] * $datos[$i]['Cantidad'];
                                            $PesoT = $PesoT + $datos[$i]['Cantidad'] * $datos[$i]['Peso'];
                                        }
                                        if ($PesoT > 15) { ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i +1 ?>
                                </th>
                                <td><i class="fas fa-exclamation-circle"></i></td>
                                <td>Pago por superar los15 Kg de envio gratuito a domicilio</td>
                                <td></td>
                                <td></td>
                                <td><label id="Cargo"></label> S/. 10.00</td>
                            </tr>
                            <?php
                                $Total = $Total + 10;
                                } ?>
                        </tbody>
                        <?php
                            } else {
                                echo '<center><h2>Agrege productos al carrito de compras</h2></center>';
                            }
                            if(!isset($Total)){
                                $Total = 0;
                            }
                        ?>
                    </table>
                </div>
                <p class="d-flex justify-content-end mr-5">SUBTOTAL: <b>
                        <?php echo 'S/. ' . number_format($Total/1.18,2); ?></b></p>
                <p class="d-flex justify-content-end mr-5">IGV: <b>
                        <?php echo 'S/. ' . number_format($Total - $Total/1.18,2); ?></b></p>
                <p class="d-flex justify-content-end mr-5">TOTAL: <b>
                        <?php echo 'S/. ' . number_format($Total,2); ?></b></p>
            </div>
        </section>
    </div>

    <?php require '../include/footer.php'; ?>
    <?php require '../include/script.php'; ?>
</body>

</html>