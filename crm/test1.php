<?php
$fichero = "test.txt";

date_default_timezone_set("Europe/Madrid");
// Guardamos en $texto el contenido del fichero
$linea = "Son las ".date("H:i:s")."\n";
file_put_contents($fichero, $linea);
header("Content-Type: text/plain");
// Muestra directamente el contenido de $fichero
readfile($fichero);

?>