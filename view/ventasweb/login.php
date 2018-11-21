<?php

    session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        $_SESSION['usuario'] = null;
    }

    require '../../php/ventasweb/get.php';
	$get = new get();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../include/head.php'; ?>
    <title>Document</title>
</head>

<body>
    <?php include '../../include/ventasweb/header.php'; ?>
    <section>
        <div class="container col-md-5 mt-5">
            <div class="form-group">
                <label for="UserName" CssClass="sr-only">Usuario o Email</label>
                <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Usuario o Email">
            </div>
            <div class="form-group">
                <label for="UserPass" CssClass="sr-only">Contraseña</label>
                <input type="Password" name="UserPass" id="UserPass" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="MantenerIniciada" id="MantenerIniciada" class="form-check-input" >
                <label for="MantenerIniciada" CssClass="form-check-label">Mantener la sesión iniciada</label>
            </div>
            <div class="form-group mt-2">
                <a href="#">He olvidado mi contraseña</a>
            </div>
            <div class="form-group form-row">
                <button id="Login" class="btn btn-outline-success mt-2 col-md-5">Iniciar Sesión</button>
                <p class="col-md-2"></p>
                <a href="registrarUsuario.php" class="btn btn-outline-primary mt-2 col-md-5" Font-Size="10pt">Registrarse</a>
            </div>
        </div>
    </section>
    <?php include '../../include/ventasweb/footer.php'; ?>
    <?php include '../../include/script.php'; ?>
</body>

</html>