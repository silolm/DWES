<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$correo = "mail.info@gmail.com";
$arroba = "@";
$posicion = strpos($correo, $arroba);
$cadena1 = "";
$cadena2 = "";

if ($posicion) {
    $cadena1 = substr($correo, 0, $posicion);
    $cadena2 = substr($correo, $posicion + 1);
    echo("Cadena 1: " . $cadena1);
    echo("<br>");
    echo("Cadena 2: " . $cadena2);
} else {
    echo("Correo inválido [¡ @ !]");
}

?>
</body>
</html>
</html>