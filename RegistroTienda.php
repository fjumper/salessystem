<?php 
    include 'php/get.php';
    $get = new get();
    $resultD = $get->getDepartamentos();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

</head>

<body>
    <div id="contenedoor">
        <header>
            <div style="background-color: rgb(225,225,225)">
                <h1 style="color: rgb(22,157,178); text-align:center; padding-top:10px; font-size:65px"><strong>HIPERMERCADOS</strong></h1>
                <h5 style="color: rgb(95,95,95); text-align:center; margin-left:180px; padding-bottom:10px; font-size:22px"><i>Donde
                        comprar es muy fácil</i></h5>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(22,157,178)">
                <a class="navbar-brand" style="color: rgb(255, 255, 255)" href="index.php">MAESTROS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroCategoria.php">CATEGORIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProveedor.php">PROVEEDOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroEmpleado.php">EMPLEADOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoBase.php">PRODUCTO
                                BASE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroTienda.php">NUEVA TIENDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoVenta.php">PRODUCTO
                                VENTA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroClientes.php">CLIENTES</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: rgb(255, 255, 255)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                REPORTES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <form action="php-registrar/RegistrarTienda.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <div class="card text-white bg-info mb-3">
                                    <center>
                                        <h1 class="card-header">REGISTRO DE NUEVA TIENDA</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <div class="card text-white bg-info mb-3">
                                    <center>
                                        <h4 class="card-header">INFORMACIÓN BÁSICA</h4>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">NOMBRE DE TIENDA</label>
                            <div class="col-sm-7">
                                <input type="text" id="nombreTienda" name="nombreTienda" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">DIRECCION</label>
                            <div class="col-sm-7">
                                <input type="text" id="Direccion" name="Direccion" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">DEPARTAMENTO </label>
                            <div class="col-sm-7">
                                <select name="Departamento" id="Departamento" class="form-control">
                                    <option value="0">Seleccione</option>
                                    <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowD['IdDepartamento']; ?>">
                                        <?php echo $rowD['Departamento']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">PROVINCIA </label>
                            <div class="col-sm-7">
                                <select name="Provincia" id="Provincia" class="form-control">
                                    <option value="0" Enabled="true">Seleccione</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">DISTRITO </label>
                            <div class="col-sm-7">
                                <select name="Distrito" id="Distrito" class="form-control">
                                    <option value="0" Enabled="true">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <div class="card text-white bg-info mb-3">
                                    <center>
                                        <h4 class="card-header">UBICACIÓN</h4>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div id="map" style="width:510px;height:300px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="hidden" id="Latitud" name="Latitud" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="hidden" id="Longitud" name="Longitud" class="form-control" >
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group row d-flex justify-content-around flex-wrap">
                            <button type="submit" class="btn btn-outline-success mt-2" onclick="verificar_campos()">GUARDAR</button>
                            <button type="button" class="btn btn-outline-warning mt-2">CANCELAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="js/maps.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7gh0RuOd-hx-NEDxkAx_usEqlUqw1afE&callback=initMap"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ubigeo.js"></script>
        <script src="js/validaciones.js"></script>


</body>

</html>