<?php
	session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        header("Location: login.php?Debe Iniciar Sesion");
    }

    require '../../php/ventasweb/get.php';
	$get = new get();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require '../../include/head.php'; ?>
    <title>Pago</title>
</head>
<body>
    <?php require '../../include/ventasweb/header.php'; ?>
    <div class="container-fluid">
        <section class="container">
            <div class="card text-center mt-5">
                <div class="card-header  text-uppercase">
                    <i class="fas fa-money-bill-alt"></i> Pago
                </div>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex flex-row justify-content-around">
                            <div class="font-weight-bold">Método de Pago</div>
                            <div class="d-flex flex-column al">
                                <div class="btn-group mb-2 d-flex justify-content-center" role="group">
                                    <button type="button" id="Visa" class="btn btn-outline-secondary active"><i class="fab fa-cc-visa"></i></button>
                                    <button type="button" id="MasteCard" class="btn btn-outline-secondary"><i class="fab fa-cc-mastercard"></i></button>
                                    <button type="button" id="AmericanExpress" class="btn btn-outline-secondary"><i class="fab fa-cc-amex"></i></button>
                                </div>
                                <input type="text" class="form-control" name="num_tarjeta" id="num_tarjeta" placeholder="Número Tarjeta">
                            </div>
                        </li>
                        <li class="list-group-item d-flex flex-column justify-content-center">
                            <div class="font-weight-bold">Lista de compra</div>
                            <div class="card-body table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src="../img/Productos/65UK6350_1.jpg" style="width: 3rem;" alt=""></td>
                                            <td>TV 65UK6350 65" 4K Ultra HD Smart LG</td>
                                            <td>1</td>
                                            <td>S/.2,749.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><img src="../img/Productos/X507UB-BR161T_1.jpg" style="width: 3rem;" alt=""></td>
                                            <td>Laptop Asus X507UB-BR161T 15.6" Core i5 7ma Generación 1TB 4GB NVIDIA 2GB</td>
                                            <td>1</td>
                                            <td>S/.1,999.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><i class="fas fa-exclamation-circle" style="font-size: 3rem;"></i></td>
                                            <td>Cargo adicional - Peso exedente</td>
                                            <td>1</td>
                                            <td>S/.10.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="d-flex justify-content-end mr-5">TOTAL: <b>S/.4,758.00</b></p>
                        </li>
                        <li class="list-group-item d-flex flex-row flex-wrap justify-content-around">
                            <div class="font-weight-bold">Dirección de entrega</div>
                            <div>
                                <div class="direccion">
                                    <p>JIRON LIBERTAD 567</p>
                                </div>
                                <div class="ubigeo">
                                    <p>TAMBO, HUANCAYO, JUNIN</p>
                                </div>
                                <button type="button" class="btn btn-outline-success"><i class="fas fa-map-marker-alt"></i></button>
                            </div>
                            <button class="btn btn-primary col-md-3" style="height:50px;"><i class="fas fa-store-alt"></i> Recoger en tienda</button>
                            <button class="btn btn-primary col-md-3 d-none" style="height:50px;"><i class="fas fa-truck"></i> Delivery</button>
                        </li>
                        <li class="list-group-item d-flex flex-column flex-wrap justify-content-around">
                            <div class="d-flex flex-row flex-wrap justify-content-around">
                                <div class="font-weight-bold">Hora de entrega</div>
                                <input type="time" name="hora_entrega" id="hora_entrega" class="form-control col-md-1">
                            </div>
                            <div class="d-flex flex-row flex-wrap justify-content-around">
                                <div class="d-flex justify-content-center flex-wrap text-justify col-md-4">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <p>Estimado usuario la entrega de pedido debe ser <b>minimamente dos horas</b> despues de haber realizado su pedido. Gracias.</p>
                                </div>
                                <div class="d-flex justify-content-center flex-wrap text-justify col-md-4"> 
                                    <i class="fas fa-exclamation-circle"></i>
                                    <p>Horario de atención 8 am - 10 pm</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-bell"></i> Para cualquier contacto con la empresa, comuniquese al 064-262626 o al 936243660.</p>
                    <a href="#" class="btn btn-primary">Confirmar y Pagar</a>
                </div>
            </div>
        </section>
    </div>

    <?php require '../../include/ventasweb/footer.php'; ?>
    <?php require '../../include/script.php'; ?>
</body>
</html>