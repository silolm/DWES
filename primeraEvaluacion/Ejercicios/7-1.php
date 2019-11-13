<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$arrayNums = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$tamanyo = count($arrayNums);

echo "Array";
echo "<br>";

for ($i = 0; $i < $tamanyo; $i++) {
    echo next($arrayNums) . "<br>";
}

echo "Array indexado hacia atrás";
echo "<br>";

end($arrayNums);

for ($i = 0; $i < $tamanyo; $i++) {
    echo prev($arrayNums) . "<br>";
}

?>
</body>
</html>
</html>