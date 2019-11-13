<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$texto = "Manipulador de alimentos";
$aux = "";
$textoCambiado = "";

for ($i = 0; $i < strlen($texto); $i += 2) {
    $aux = substr($texto, $i);
    $textoCambiado = $aux[1];
    $textoCambiado .= $aux[0];
    echo($textoCambiado);
}

?>
</body>
</html>