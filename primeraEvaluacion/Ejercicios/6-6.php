<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$cadena = "murcielago";
$almacen = "";

for ($i = 0; $i < strlen($cadena); $i += 2) {
    if ($cadena[$i] == 'a')
        $cadena[$i] = 'e';
    elseif ($cadena[$i] == 'e')
        $cadena[$i] = 'i';
    elseif ($cadena[$i] == 'i')
        $cadena[$i] = 'o';
    elseif ($cadena[$i] == 'o')
        $cadena[$i] = 'u';
    elseif ($cadena[$i] == 'u')
        $cadena[$i] = 'a';

    $almacen = $cadena[$i + 1];
    $cadena[$i + 1] = $cadena[$i];
    $cadena[$i] = $almacen;
}

echo "<br>" . $cadena . "<br>";

for ($i = 0; $i < strlen($cadena); $i += 2) {
    $almacen = $cadena[$i + 1];
    $cadena[$i + 1] = $cadena[$i];
    $cadena[$i] = $almacen;

    if ($cadena[$i] == 'o')
        $cadena[$i] = 'i';

}

echo $cadena;

?>
</body>
</html>