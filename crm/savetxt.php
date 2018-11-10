<?php
$fichero = "test.txt";
var_dump($_POST['myText']);
$post_data = $_POST['myText'];
file_put_contents($fichero, $post_data);
header("Content-Type: text/plain");
readfile($fichero);

?>