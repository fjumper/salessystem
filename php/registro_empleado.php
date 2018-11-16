<?php

require_once("conexion.php");

//Inicio de sesion
function buscaruser($user,$conn){
   $id;
   $query = "SELECT IdUsuario,UserName FROM `usuarios` WHERE `UserName` like '$user'";

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

function registrarusuario($email,$user,$password,$conn){

   $query = "INSERT INTO `usuarios`(`Email`, `UserName`, `UserPass`) 
   VALUES ('$email','$user','$password')";

   $resultado = $conn -> query($query);

}


//Comparar en la base de datos el tipo de empleado

function registrar_empleado(
   $dni,$iduser,$nombre,
   $apeP,$apeM,$fkGener,
   $fnac,$tipoCargo,$celular,
   $direccion,$foto,$conn){

   $query = "INSERT INTO 
   `empleados`(`IdEmpleado`, `FkUsuario`,
    `Nombre`, `ApellidoP`, `ApellidoM`,
     `FkGenero`, `FechaNacimiento`, `FkTipoCargo`,
      `Celular`, `Direccion`, `Fotografia`) 
      VALUES ('$dni',$iduser,'$nombre','$apeP',
      '$apeM',$fkGener,'$fnac',
      $tipoCargo,'$celular','$direccion','$foto')";

   
   $resultado = $conn -> query($query);
   $conn->close();
   
}


$datos;

$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apeP= $_POST["apeP"];
$apeM= $_POST["apeM"];
$fkGener = $_POST["fkGener"];
$fnac = $_POST["fnac"];
$tipoCargo= $_POST["tipoCargo"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$foto = $_POST["foto"];
$email = $_POST["email"];
$user = $_POST["user"];
$password = $_POST["password"];

$id = buscaruser($user,$conn);

if($id=="0"){

   registrarusuario($email,$user,$password,$conn);

   $iduser = buscaruser($user,$conn);

   registrar_empleado(
      $dni,$iduser,$nombre,
      $apeP,$apeM,$fkGener,
      $fnac,$tipoCargo,$celular,
      $direccion,$foto,$conn);

   $datos["estado"] = "1";
   $datos["contenido"] = "Creado correctamente";
}
else{
   $datos["estado"] = "2";
   $datos["contenido"] = "Usuario ya existente use otro usuario";
}

echo json_encode($datos);

?>
