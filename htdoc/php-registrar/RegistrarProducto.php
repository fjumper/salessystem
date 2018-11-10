<?php
include("../conexion.php");
if (isset($_POST['btnguardar']))
{
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombreproducto'];
    $categoria = $_POST['categoria'];
    $unidadmedida = $_POST['unidadmedida'];
    $otros = $_POST['otros'];
    $proveedor = $_POST['proveedor'];
    $descripcion = $_POST['descripcion'];
    $peso = $_POST['peso'];
    $alto = $_POST['alto'];
    $largo = $_POST['largo'];
    $ancho = $_POST['ancho'];
    $unidaddimensiones = $_POST['unidaddimensiones'];
    $imagen== $_FILES['imagen']['name']; 

            $ruta = "imagenes/" . $_FILES['imagen']['name']; 
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta); 

    $sql="insert into productos () values ('$codigo','$nombre','$categoria','$unidadmedida','$otros','$proveedor','$descripcion','$peso','$alto','$largo','$ancho','$unidaddimensiones','$imagen')";
    $result = mysqli_query($cn,$sql);
    echo "<script> alert('Registro de Nuevo Producto');   window.location.href='../productos.php';   </script>";
}
?>