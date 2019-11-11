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

echo $cadena = "palabras";
$cadena2 = "";

echo '<br>';

for ($i = strlen($cadena) - 1; $i >= 0; $i--){
    $cadena2 .= $cadena[$i];
}
echo $cadena2;

?>
</body>
</html>
