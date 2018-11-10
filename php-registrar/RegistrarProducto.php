<?php
    include '../php/config.php';

    $codigobarras = $_POST['codigo'];
    $producto = $_POST['nombreproducto'];
    $codigolote = $_POST['codigolote'];
    $subcategoria = $_POST['Subcategoria'];
    $descripcion = $_POST['descripcion'];
    $preciocompra = $_POST['preciocompra'];
    $alto = $_POST['alto'];
    $largo = $_POST['largo'];
    $ancho = $_POST['ancho'];
    $peso = $_POST['peso'];
    $cantidad = $_POST['cantidad'];
    $perecible = $_POST['perecible'];
    $volumen = $largo.','.$ancho.','.$alto;

    $img = $_FILES['inputFile1']['tmp_name'];
    $ruta = "../Img/Productos/" . $_FILES['inputFile1']['name']; 
    move_uploaded_file($img, $ruta); 

    $con = new Connection();
    $cmd = $con->get_connection();
    //echo "INSERT INTO productos values (NULL,'".$codigobarras."','".$producto."','".$codigolote."','".$subcategoria."','".$descripcion."','".$preciocompra."','".$volumen."','".$peso."','".$ruta."','".$cantidad."','".$perecible."')";
    $datos = $cmd->query("INSERT INTO productos values (NULL,'".$codigobarras."','".$producto."','".$codigolote."','".$subcategoria."','".$descripcion."','".$preciocompra."' , '".$volumen."' , '".$peso."','".$ruta."','".$cantidad."','".$perecible."')");
    echo "<script> alert('Registro de Nuevo Producto');   window.location.href='../RegistroProductoBase.php';   </script>";
?>