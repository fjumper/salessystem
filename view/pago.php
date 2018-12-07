<?php
	session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        header("Location: login.php?Debe Iniciar Sesion");
    }

    require '../php/get.php';
    $get = new get();
    $resultD = $get->getSP("spListarDepartamentos()");
    $resultT = $get->getSP("spListarTienda()");
    $IdUsuario = $_SESSION['usuario'][0]['Id'];
    $resultDC = $get->getSP("spListarDireccionCliente('$IdUsuario')");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require '../include/head.php'; ?>
    <title>Pago</title>
    <style>
        input {
            border: none;
        }
    </style>
</head>

<body>
    <?php require '../include/header.php'; ?>
    <div class="container">
        <section>
            <div class="mt-5">
                <div class="card text-center">
                    <div class="card-header">Detalles de la compra</div>
                        <div class="card-body">
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
                                        for($i = 0; $i <count($datos); $i++) { 
                                        ?>
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
                                                <th scope="row"><?php echo $i +1 ?></th>
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
                            <p class="d-flex justify-content-end mr-5">TOTAL: <b><?php echo 'S/. ' . number_format($Total,2); ?></b></p>
                        </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-9 mt-5">
                    <div class="card text-center">
                        <div class="card-header">Datos de Entrega</div>
                        <div id="Delivery" class="form-row mt-5 mb-5">
                            <div class="col-md-8">
                                <p class="font-weight-bold">Dirección de Entrega</p>
                                <?php while ($rowDC = $resultDC->fetch_assoc()) { ?>
                                    <div class=""><label id="IdCliente"><?php echo $rowDC['IdCliente']; ?></label></div>
                                    <div class="direccion">
                                        <label id="lblDireccion"><?php echo $rowDC['Direccion']; ?></label>
                                    </div>
                                    <div class="ubigeo">
                                        <label id="lblDistrito"><?php echo $rowDC['Distrito']; ?></label>, <label id="lblProvincia"><?php echo $rowDC['Provincia']; ?></label>, <label id="lblDepartamento"><?php echo $rowDC['Departamento']; ?></label>
                                    </div>
                                <?php } ?>
                                <!-- Boton Modal -->
                                <button type="button" id="cDireccion" class="btn btn-outline-success" data-toggle="modal" data-target="#CambiarDireccion"><i class="fas fa-map-marker-alt"></i> Cambiar dirección</button>

                                <!-- Modal -->
                                <div class="modal fade text-left" id="CambiarDireccion" tabindex="-1" role="dialog" aria-labelledby="CambiarDireccionLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="CambiarDireccionLabel">Cambiar Dirección</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Dirección:</label>
                                                <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Dirección">
                                            </div>
                                            <div class="form-group">
                                                <label for="Departamento">Departamento</label>
                                                <select name="Departamento" id="Departamento" class="custom-select">
                                                    <option value="0">Seleccione</option>
                                                    <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                                                    <option value="<?php echo $rowD['IdDepartamento']; ?>">
                                                        <?php echo $rowD['Departamento']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Provincia">Provincia</label>
                                                <select name="Provincia" id="Provincia" class="custom-select">
                                                    <option value="0" Enabled="true">Seleccione</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Distrito">Distrito</label>
                                                <select name="Distrito" id="Distrito" class="custom-select">
                                                    <option value="0" Enabled="true">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" id="GuardarCambios" class="btn btn-primary">Guardar Cambios</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 mt-5">
                                <button id="cTienda" class="btn btn-primary" style="height:50px; width:200px"><i class="fas fa-store-alt"></i> Recoger en tienda</button>
                            </div>
                        </div>
                        <div id="Tienda" class="form-row mt-5 mb-5 d-none">
                            <div class="col-md-8">
                                <p class="font-weight-bold">Tiendas de Entrega</p>
                                <div class="table-responsive col-md-11 m-auto">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th></th>
                                                <th>Nombre</th>
                                                <th>Dirección</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($rowT = $resultT->fetch_assoc()) { ?>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="<?php echo $rowT['IdTienda'] ?>">
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <p><label><?php echo $rowT['NombreTienda']; ?></label></p>
                                                    </td>
                                                    <td>
                                                        <p><label><?php echo $rowT['Direccion']; ?></label>, <label><?php echo $rowT['Departamento']; ?></label>, <label><?php echo $rowT['Provincia']; ?></label>, <label><?php echo $rowT['Distrito']; ?></label></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                <button id="cDelivery" class="btn btn-primary" style="height:50px; width:200px"><i class="fas fa-truck"></i> Delivery</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <div class="card-header text-center">Pagar con Tarjeta</div>
                        <div class="card-body">
                            <div class="btn-group m-3 d-flex justify-content-center" role="group">
                                <button type="button" id="Visa" class="Tarjeta btn btn-outline-secondary active"><i class="fab fa-cc-visa"></i></button>
                                <button type="button" id="MasteCard" class="Tarjeta btn btn-outline-secondary"><i class="fab fa-cc-mastercard"></i></button>
                                <button type="button" id="AmericanExpress" class="Tarjeta btn btn-outline-secondary"><i class="fab fa-cc-amex"></i></button>
                            </div>
                            <div>
                                <label id="MarcaTarjeta">1</label>
                            </div>
                            <div class="form-group">
                                <label for="">N° Tarjeta:</label>
                                <div class="form-row">
                                    <input type="number" class="form-control number" name="NumTarjeta" id="NumTarjeta" title="Ingrese 16 dígitos" min="1000000000000000" max="9999999999999999" placeholder="Número Tarjeta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Caducidad:</label>
                                <div class="form-row">
                                    <input type="number" class="form-control col-md-5 number" name="MM" id="MM" title="Ingrese el mes del 1 al 12" min="1" max="12" placeholder="MM" required>
                                    <p class="col-md-2"></p>
                                    <input type="number" class="form-control col-md-5 number" name="AA" id="AA" title="Ingrese el año de vencimiento mayor al 2018" min="2018" placeholder="AA" required>
                                </div>
                            </div>
                            <div>
                                <label for="">Cod. Seguridad:</label>
                                <div class="form-row">
                                    <input type="number" class="form-control number" name="CVC" id="CVC" title="Ingrese 3 dígitos" min="100" max="999" placeholder="CVC" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-around">
                            <a href="carrito.php" class="btn btn-secondary">Cancelar</a>
                            <button type="button" id="PagarCompra" class="btn btn-primary">Pagar</button>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
    </div>

    <?php require '../include/footer.php'; ?>
    <?php require '../include/script.php'; ?>
</body>

</html>