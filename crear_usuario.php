<?php
session_start();

if(isset($_SESSION["TipoCargo"])){
    if($_SESSION["TipoCargo"] !="administrador")
          header('Location: index.html');
}
else{
    header('Location: index.html');
}

?>

<!DOCTYPE html>
<html lang="es">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="css/ventas.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.css">
               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.js"></script>
            <title>Crear Usuario</title>
         </head>
<body>
      <br>
   <div class="cont container">
      <br> 
         <fieldset class="form-group">
               <legend class="col-sm-2">Detalle cajero</legend>
                <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">DNI</label>
                        <div class="col-10">
                          <input class="form-control" type="text" id="dni">
                        </div>
                      </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Nombres</label>
                      <div class="col-10">
                        <input class="form-control" type="text" id="nombres">
                      </div>
                      </div>
                  <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Apellido Paterno</label>
                        <div class="col-10">
                            <input class="form-control" type="text"  id="apellidoP">
                        </div>
                        </div>
                  <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Apellido Materno</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="apellidoM">
                        </div>
                        </div>
                      <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Direccion</label>
                        <div class="col-10">
                          <input class="form-control" type="text" id="direccion">
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <label for="example-password-input" class="col-2 col-form-label">Celular</label>
                        <div class="col-10">
                          <input class="form-control" type="text"  id="celular">
                        </div>
                      </div>
                      <div class="form-group row">
                            <label for="example-password-input" class="col-4 col-form-label">F. Nacimiento</label>
                            <div class="col-8">
                              <input class="form-control" type="date"  id="f-nacimiento">
                            </div>
                          </div>
                  </div>
                  <div class="col">
                  <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Foto</label>
                        <div class="col-3">
                          <img width="100px" height="100px" id="foto_muestra" src="https://cdn.pixabay.com/user/2015/01/20/20-56-42-330_250x250.jpg" alt="">
                        </div>
                        <div class="col-7">
                          <input class="form-control" id="foto" type="file">
                        </div>
                      </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Genero</label>
                      <div class="col-10">
                        <select class="form-control" id="sexo">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                          </select>
                      </div>
                      </div>
                  <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Cargo</label>
                        <div class="col-10">
                        <select class="form-control" id="cargo">
                          <option value="1">Asesor</option>
                          <option value="3">Vendedor</option>
                          <option value="2">Administrador</option>
                        </select>
                        </div>
                        </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                          <input class="form-control" type="email" id="email">
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <label for="example-password-input" class="col-4 col-form-label">Usuario</label>
                        <div class="col-8">
                          <input class="form-control" type="text"  id="user">
                        </div>
                      </div>
                      <div class="form-group row">
                            <label for="example-password-input" class="col-4 col-form-label">Contraseña</label>
                            <div class="col-8">
                              <input class="form-control" type="password"  id="password">
                            </div>
                          </div>

                  </div>
                </div>
               <div class="row">
     
               <div class="col-12" align="right">
                   <button style="width:100px" onclick="window.history.back()"  class="btn btn-danger">Cancelar</button>
                   <button onclick="registrar()" style="width:100px" class="btn btn-primary">Registrar</button>
               </div>

            </fieldset>

   </div>


   <script src="js_ajax/registro.js">
      </script>
</body>
</html>