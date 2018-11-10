<?php

    include 'php/get.php';
    $get = new get();
    $resultD = $get->getDepartamentos();
    $resultG = $get->getGeneros();
    // $resultC = $get->getCategoria();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php'; ?>
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="index.php"><img src="img/LogoOficial.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div role="separator" class="dropdown-divider mr-auto"></div>
                <form class="form-inline ml-auto mr-auto">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input type="text" class="form-control" placeholder="Hola! qué buscas?">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i> Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compras.php"><i class="fas fa-clipboard-list"></i> Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item dropdown d-none">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-expanded="false"><i class="fas fa-user"></i> Bienvenido: </a>
                        <div class="dropdown-menu" aria-labelledby="lbtnUsuario">
                            <a class="dropdown-item" href="login.php">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container col-md-5 col-lg-6 mt-5">
            <div class="card">
                <form action="php/insUsuarioCliente.php" method="POST">
                    <div class="card-header text-center" id="RegistrarUsuario">
                        REGISTRAR USUARIO
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="TipoUsuario">Tipo Usuario</label>
                            <select name="TipoUsuario" id="TipoUsuario" class="custom-select">
                                <option value="1" Enabled="true">Persona</option>
                                <option value="2">Empresa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="IdCliente" id="lId">DNI</label>
                            <input type="num" name="IdCliente" id="IdCliente" class="form-control" placeholder="DNI" require="true">
                        </div>
                        <div class="form-group" id="gRazonSocial">
                            <label for="RazonSocial">Razón Social</label>
                            <input type="text" name="RazonSocial" id="RazonSocial" class="form-control" placeholder="Razón Social">
                        </div>
                        <div class="form-group">
                            <label for="ApellidoP">Apellido Paterno</label>
                            <input type="text" name="ApellidoP" id="ApellidoP" class="form-control" placeholder="Apellido Paterno">
                        </div>
                        <div class="form-group">
                            <label for="ApellidoM">Apellido Materno</label>
                            <input type="text" name="ApellidoM" id="ApellidoM" class="form-control" placeholder="Apellido Materno">
                        </div>
                        <div class="form-group">
                            <label for="Nombre">Nombres</label>
                            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <label for="FechaNacimiento">Fecha Nacimiento</label>
                            <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control" placeholder="Fecha Nacimiento">
                        </div>
                        <div class="form-group">
                            <label for="Genero">Genero</label>
                            <select name="Genero" id="Genero" class="custom-select">
                                <option value="0">Seleccione</option>
                                <?php while ($rowG = $resultG->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowG['IdGenero']; ?>"><?php echo $rowG['Genero']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="Departamento">Departamento</label>
                            <select name="Departamento" id="Departamento" class="custom-select">
                                <option value="0">Seleccione</option>
                                <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowD['IdDepartamento']; ?>"><?php echo $rowD['Departamento']; ?></option>
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
                        <div class="form-group">
                            <label for="DireccionEntrega">Dirección</label>
                            <input type="text" name="DireccionEntrega" id="DireccionEntrega" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="form-group">
                            <label>Cordenadas</label>
                            <div class="d-flex flex-wrap justify-content-between">
                                <input type="text" name="Longitud" id="Longitud" class="form-control mb-3 col-md-3"  disabled>
                                <input type="text" name="Latitud" id="Latitud" class="form-control mb-3 col-md-3"  disabled>
                                <a href="#" class="btn btn-primary mb-3 col-md-4" data-toggle="modal" data-target="#mapsModalCenter"><i class="fas fa-map-marker-alt"></i> Seleccionar</a>
                                <div class="modal fade" id="mapsModalCenter" tabindex="-1" role="dialog" aria-labelledby="mapsModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mapsModalCenterTitle">Seleccione su domicilio en el mapa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="map" style="width: 100%; height: 300px;"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"  data-dismiss="modal">Cerrar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="UserName">Usuario</label>
                            <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" id="Email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="UserPass">Contraseña</label>
                            <input type="password" name="UserPass" id="UserPass" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="ConfUserPass">Confirmar Contraseña</label>
                            <input type="text" name="ConfUserPass" id="ConfUserPass" class="form-control" placeholder="Confirmar Contraseña">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-wrap justify-content-around">
                            <button type="submit" id="Registrar" class="btn btn-outline-success">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/script.php'; ?>
    <script src="js/maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7gh0RuOd-hx-NEDxkAx_usEqlUqw1afE&callback=initMap"></script>
</body>

</html>