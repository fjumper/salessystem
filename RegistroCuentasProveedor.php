<?php 
    include 'php/get.php';
    $get = new get();
    $resultD = $get->getProveedores();
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
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProveedor.php">PROVEEDOR</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <form role="form" name="registro" action="php-registrar/RegistrarCuentasProveedor.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h1 class="card-header">REGISTRO DE CUENTA BANCARIA DE PROVEEDOR</h1>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PROVEEDOR</label>
                        <div class="col-sm-8">
                            <select name="proveedor" id="proveedor" class="form-control" required>
                                <option value="0">Seleccione</option>
                                <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                                <option value="<?php echo $rowD['IdProveedor']; ?>">
                                    <?php echo $rowD['IdProveedor']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">NUMERO DE CUENTA</label>
                        <div class="col-sm-8">
                            <input type="text" id="numerocuenta" name="numerocuenta" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">NOMBRE DE BANCO</label>
                        <div class="col-sm-8">
                            <select id="nombrebanco" name="nombrebanco" class="form-control" required>
                                <option selected disabled>Seleccione</option>
                                <option>Banco de Comercio</option>
                                <option>Banco de Crédito del Perú</option>
                                <option>Banco Interamericsno de Finanzas(Banbif)</option>
                                <option>Banco Pichincha</option>
                                <option>Banco Falabella</option>
                                <option>Banco Ripley</option>
                                <option>Banco Azteca</option>
                                <option>Banco de la Nación</option>
                                <option>BBVA Continental</option>
                                <option>CitiBank Perú</option>
                                <option>Interbank</option>
                                <option>MiBanco</option>
                                <option>Scotianbank Perú</option>
                                <option>Agrobanco</option>
                                <option>Crediscotia</option>
                                <option>Confianza</option>
                                <option>PreEmpresa</option>
                                <option>Qapaq</option>
                                <option>TFC</option>
                                <option>Caja Arequipa</option>
                                <option>Caja Cusco</option>
                                <option>Caja Trujillo</option>
                                <option>Caja del Santa</option>
                                <option>Caja Huancayo</option>
                                <option>Caja Arequipa</option>
                                <option>Caja Ica</option>
                                <option>Caja Piura</option>
                                <option>Caja Sullana</option>
                                <option>Caja Maynas</option>
                                <option>Caja Tacna</option>
                                <option>Caja Los Andes</option>
                                <option>Caja Sipán</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group row d-flex justify-content-around flex-wrap">
                            <button type="submit" class="btn btn-outline-success mt-2"><i class="far fa-save"></i>GUARDAR</button>
                            <button type="reset" class="btn btn-outline-warning mt-2">LIMPIAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>