<?php
/*  CONECCIÓN CON LA BASE DE DATOS  */

$host = 'localhost';
$database = 'salvamedios';
$username = 'root';
$password = '';
$port = 3306;

// Conectarse a MySQL
$link = mysql_connect($host, $database, $username, $password);
if (!$link) {
    die('Error al conectarse a mysql: ' . mysql_error());
}

// Seleccionar nuestra base de datos
$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Error al abrir la base de datos: ' . mysql_error());
}
else {
 echo 'Conexion exitosa.';
}

?>