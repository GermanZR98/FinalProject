<?php 

$file = file_get_contents("informacion.json");
$file = json_decode($file);

print $file->{$_POST["dato"]};

?>