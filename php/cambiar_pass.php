<?php
session_start();
require_once("conexion.php");
$usuario = $_SESSION["user"];

function camb_contr($user,$pasAn,$pasNu,$conn){

   if($pasAn == $_SESSION['password']){
      $resultado;
      $query = "UPDATE `usuarios` SET `UserPass`='$pasNu' WHERE `UserName` = '$user'";
      $conn -> query($query);
      $resultado ="1" ;
      $_SESSION['password'] = $pasNu;
   }
   else{
      $resultado = "2";
   }

   return $resultado;
}

$pass1 = $_POST["password"];
$pass2 = $_POST["passwordNueva"];

$data["estado"] = camb_contr($usuario,$pass1,$pass2,$conn);

echo json_encode($data);

?>