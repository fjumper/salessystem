<?php

    session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        $_SESSION['usuario'] = null;
    }
    require '../php/get.php';
    $get = new get();
    $resultD = $get->getSP("spListarDepartamentos()");
    $resultG = $get->getSP("spListarGeneros()");
    $resultEC = $get->getSP("spListarEstadosCivil()");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../include/head.php'; ?>
    <title>Document</title>
</head>

<body>
    <?php include '../include/header.php'; ?>
    <section>
        <div class="container col-md-12 mt-5">
            <div class="card">
                <form action="../php/insUsuarioCliente.php" method="POST">
                    <div class="card-header text-center" id="RegistrarUsuario">
                        REGISTRAR USUARIO
                    </div>
                    <div class="card-body d-flex flex-wrap justify-content-around">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="TipoUsuario">Tipo Usuario</label>
                                <select name="TipoUsuario" id="TipoUsuario" class="custom-select">
                                    <option value="1" Enabled="true">Persona</option>
                                    <option value="2">Empresa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="IdCliente" id="lId">DNI</label>
                                <input type="num" name="IdCliente" id="IdCliente" class="form-control" placeholder="DNI"
                                    require="true">
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
                                <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control"
                                    placeholder="Fecha Nacimiento">
                            </div>
                            <div class="form-group">
                                <label for="EstadoCivil">Estado Civil</label>
                                <select name="EstadoCivil" id="EstadoCivil" class="custom-select">
                                    <option value="0">Seleccione</option>
                                    <?php while ($rowEC = $resultEC->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowEC['IdEstadoCivil']; ?>">
                                        <?php echo $rowEC['EstadoCivil']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Genero">Genero</label>
                                <select name="Genero" id="Genero" class="custom-select">
                                    <option value="0">Seleccione</option>
                                    <?php while ($rowG = $resultG->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowG['IdGenero']; ?>">
                                        <?php echo $rowG['Genero']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-5">
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
                            <div class="form-group">
                                <label for="DireccionEntrega">Dirección</label>
                                <input type="text" name="DireccionEntrega" id="DireccionEntrega" class="form-control"
                                    placeholder="Dirección">
                            </div>
                            <div class="form-group">
                                <label>Ubicación</label>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <input type="text" name="Longitud" id="Longitud" class="form-control mb-3 col-md-3"
                                        readonly>
                                    <input type="text" name="Latitud" id="Latitud" class="form-control mb-3 col-md-3"
                                        readonly>
                                    <a href="#" class="btn btn-primary mb-3 col-md-4" data-toggle="modal" data-target="#mapsModalCenter"><i
                                            class="fas fa-map-marker-alt"></i> Seleccionar</a>
                                    <div class="modal fade" id="mapsModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="mapsModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mapsModalCenterTitle">Seleccione su
                                                        domicilio en el mapa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="map" style="width: 100%; height: 300px;"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
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
                                <input type="text" name="ConfUserPass" id="ConfUserPass" class="form-control"
                                    placeholder="Confirmar Contraseña">
                            </div>
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
    <?php include '../include/footer.php'; ?>
    <?php include '../include/script.php'; ?>
    <script src="../js/maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7gh0RuOd-hx-NEDxkAx_usEqlUqw1afE&callback=initMap"></script>
</body>

</html>