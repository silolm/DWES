<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo $texto = "El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.  
El pingüino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a su querido cachorro.
Le gustaba cenar un exquisito sándwich de jamón con zumo de piña y vodka fría.
El viejo Señor Gómez pedía queso, kiwi y habas, pero le ha tocado un saxofón.
Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán.";

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