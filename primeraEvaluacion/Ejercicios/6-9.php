<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo $correo = "mail.info@gmail.com";
echo '<br>';

$com = substr($correo, -4);

if ($com == ".com") {
    echo("El correo contiene .com");
} else {
    echo("Correo no válido");
}
?>
</body>
</html>