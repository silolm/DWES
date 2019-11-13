<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$alumno = array("Nombre" => "Mario", "Apellido" => "Silla");

$tam = count($alumno);

end($alumno);
echo current($alumno) . "<br>";
for ($i = $tam; $i > 0; $i--) {
    echo prev($alumno) . "<br>";
}

?>
</body>
</html>
</html>