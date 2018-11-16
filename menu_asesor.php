<?php
session_start();

if(isset($_SESSION["TipoCargo"])){
      if($_SESSION["TipoCargo"] !="asesor")
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
   <link rel="stylesheet" href="css/menu.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.js"></script>
   <title>Menu</title>
</head>
<body>
   <br>
   <div class="cont">

         <div class="row" align="center">

               <div class="col align-self-center">
                 <h2>Nombre de la empresa</h2>
               </div>

         </div>

         <div class="row align-items-center" id="cont-center" align="center">
                  
            <div class="col">
                  <img id="img-empresa" src="https://cde.publimetro.e3.pe/ima/0/0/1/3/9/139300.jpg" alt=""></div>
                  <div id="menu-btn" class="col">
                        <a href="ventas_asesor.php" class="btn btn-secondary btn-lg">Ventas</a> <br>
                        <a href="cierre_caja_asesor.php" class="btn btn-secondary btn-lg">Cierre de caja</a> <br>
                        <a onclick="cambiar_pass()" href="#" class="btn btn-secondary btn-lg">Cambiar contraseña</a> <br>
                        <a href="index.html" class="btn btn-secondary btn-lg">Cerrar sesion</a>
            </div>

         </div>
         <div class="row justify-content-end">
               <div class="col-2 ">
                     <div class="alert alert-info" id="help" role="alert">
                           <span id="info-icon">ⓘ</span>  Ayuda
                     </div>
               </div>
         </div> 
   </div>


   <script src="js_ajax/change_pass.js">
    </script>
</body>
</html>