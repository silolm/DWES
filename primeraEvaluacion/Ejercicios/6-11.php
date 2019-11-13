<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo $texto = "el amigo de la luna";
echo '<br>';
$buscar = "el";
$cambiar = "the";

$pos = strpos($texto, $buscar);

if ($pos == $buscar) {
    $replace = str_replace($buscar, $cambiar, $texto);
    echo($replace);
} else {
    echo("El texto no contiene el artículo: 'el'");
}

?>
</body>
</html>
</html>