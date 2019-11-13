<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$libro1 = array(
    "Título: " => "Nerón, diario de un emperador",
    "Autor: " => "Pedro Galvez",
    "Fecha: " => 1998);
$libro2 = array(
    "Título: " => "Un hombre decente",
    "Autor: " => "John le Carré",
    "Fecha: " => 2019);

$biblioteca = array("lib1" => $libro1, "lib2" => $libro2);

foreach ($biblioteca as $biblio => $aux) {
    foreach ($aux as $lib => $aux2) {
        echo $lib . " ";
        echo $aux2 . "<br>";
        echo '<br>';
    }
}
?>
</body>
</html>
</html>