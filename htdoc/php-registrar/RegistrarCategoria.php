<?php
    include '../php/config.php';

    $nombre = $_POST['nombrecategoria'];
    $descripcion = $_POST['descripcioncategoria'];

    $con = new Connection();
    $cmd = $con->get_connection();
    $datos = $cmd->query("insert into categorias (Categoria, Descripcion) values ('$nombre','$descripcion')");

    echo "<script> alert('Registro de  Nueva Categoria');   window.location.href='../categoria.php';   </script>";
?>