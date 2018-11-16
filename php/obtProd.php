<?php
session_start();
require_once("conexion.php");

function buscar_prod($prod,$conn){
   $nombre;
   $query = "SELECT `IdProducto`,  `Producto`, `PrecioCompra` FROM `productos` WHERE `IdProducto` = $prod";

   $resultado = $conn -> query($query);

   if ($resultado->num_rows > 0) {
      // output data of each row
      while($row = $resultado->fetch_assoc()) {
         $nombre = $row;
      }
   } else {
      $nombre= "NO REGISTRADO";
   }
   return $nombre;
}

$prod = $_POST["id_producto"];

$nombre = buscar_prod($prod,$conn);

echo json_encode($nombre);

?>