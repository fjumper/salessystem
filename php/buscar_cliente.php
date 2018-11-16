<?php
session_start();
require_once("conexion.php");

function buscar_cliente($dni,$conn){
   $nombre;
   $query = "SELECT `IdCliente`, `Nombre`, `ApellidoP`, `ApellidoM` FROM `clientes` WHERE IdCliente = '$dni'";

   $resultado = $conn -> query($query);

   if ($resultado->num_rows > 0) {
      // output data of each row
      while($row = $resultado->fetch_assoc()) {
         $nombre = $row["Nombre"]." ".$row["ApellidoP"]." ".$row["ApellidoM"];
      }
   } else {
      $nombre= "NO REGISTRADO";
   }
   return $nombre;
}

$dni = $_POST["dni"];

$nombre = buscar_cliente($dni,$conn);

echo json_encode($nombre);

?>