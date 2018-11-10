<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>Document</title>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            BASE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroTienda.php">NUEVA TIENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoVenta.php">PRODUCTO
                            VENTA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroClientes.php">CLIENTES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: rgb(255, 255, 255)" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <section class="main"></section>
    <footer></footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>