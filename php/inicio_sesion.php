<?php
session_start();
require_once("conexion.php");

//Inicio de sesion
function sesion_buscar($user,$password,$conn){
   $id;
   $query = "SELECT `IdUsuario`, `UserName`, `UserPass`
    FROM `usuarios` where UserName='$user' and UserPass='$password'";

   $resultado = $conn -> query($query);

   if ($resultado->num_rows > 0) {
      // output data of each row
      while($row = $resultado->fetch_assoc()) {
         $id = $row["IdUsuario"];
      }
   } else {
      $id= "0";
   }
   return $id;
}


//Comparar en la base de datos el tipo de empleado

function cargo($fkUsuario,$conn){
   $data;
   $query = "SELECT IdEmpleado,FkUsuario,Nombre,ApellidoP,ApellidoM, tipos_cargo.TipoCargo 
   FROM `empleados` inner join tipos_cargo on tipos_cargo.IdTipoCargo = empleados.FkTipoCargo 
   where FkUsuario = $fkUsuario";
   
   $resultado = $conn -> query($query);
   $conn->close();
   
   if ($resultado->num_rows > 0) {
       // output data of each row
       while($row = $resultado->fetch_assoc()) {

         $data = $row;
         $_SESSION["IdEmpleado"]=$data["IdEmpleado"];
         $_SESSION["Nombre"]=$data["Nombre"];
         $_SESSION["Apellidos"]=$data["ApellidoP"]." ".$data["ApellidoM"];
         $_SESSION["TipoCargo"]=$data["TipoCargo"];

       }

   } else {
      echo "No existe valor";
   }

   return $data;
}

$user = $_POST["user"];
$password = $_POST["password"];
$caja = $_POST["caja"];

$datos;
$idUsuario = sesion_buscar($user,$password,$conn);

if($idUsuario != "0"){
   $datos["estado"] = 1;
   $datos["contenido"] = cargo($idUsuario,$conn);
   $_SESSION["caja"] = $caja;
   $_SESSION["user"] = $user;
   $_SESSION["password"]=$password;
}
else 
{
   $datos["estado"] = 2;
   $datos["contenido"] = "Inicio de Sesion incorrecta. Vuelve a intentarlo";
}

echo json_encode($datos);

?>
