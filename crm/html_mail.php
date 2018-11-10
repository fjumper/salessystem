<?php
$message = file_get_contents('hero.html');
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

// Mail it
mail('47552141@continental.edu.pe', 'Correo con HTML', $message, $headers);
?>