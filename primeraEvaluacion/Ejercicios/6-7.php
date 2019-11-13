<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo $texto = "Manipulador de alimentos";

$abc = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y", "z"];

echo "<table border='1px'>";
for ($j = 0; $j < count($abc); $j++) {
    $aux = 0;
    echo "<tr>";
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($abc[$j] == $texto[$i]) {
            $aux++;
        }
    }
    echo "<td>$abc[$j] aparece $aux veces</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>