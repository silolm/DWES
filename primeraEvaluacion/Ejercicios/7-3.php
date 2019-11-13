<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$alumno = array("Nombre" => "Mario", "Apellido" => "Silla");

$tamanyo = count($alumno);

for ($i = 0; $i < $tamanyo; $i++) {
    $elemento = each($alumno);
    echo ucfirst($elemento["value"]) . "<br>";
}


?>
</body>
</html>
</html>