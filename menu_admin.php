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
   <link rel="stylesheet" href="css/menu.css">
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
               <div class="col" id="menu-btn">
                     <a href="ventas.php" class="btn btn-secondary btn-lg">Ventas</a> <br>
                     <a href="crear_usuario.php" class="btn btn-secondary btn-lg">Usuarios</a> <br>
                     <a href="nota_cred.php" class="btn btn-secondary btn-lg">Generar notas de credito<a> <br>
                     <a href="cierre_caja_admin.php" class="btn btn-secondary btn-lg">Reporte</a> <br>
                     <a href="index.php" class="btn btn-secondary btn-lg">Cerrar sesion</a>
               </div>

         </div>
         <div class="row justify-content-end">
               <div class="col-2 ">
                     <div class="alert alert-info" id="help" role="alert">
                           <span id="info-icon">ⓘ</span>   Ayuda
                     </div>
               </div>
         </div> 
   </div>
</body>
</html>