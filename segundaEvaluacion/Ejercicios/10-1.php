<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$name     = "micookie";
$value    = $_GET["nombre"];
$expires  = time() + 60; # 60 segundos después del momento actual
$path     = "/";
$domain   = "";
$secure   = false;
$HttpOnly = true;

# Asegurarse de llamar a setcookie() antes de enviar
# otra salida al navegador.
setcookie( $name, $value, $expires, $path, $domain, $secure, $HttpOnly );

# Si no hay una pulsación previa, muestra el formulario
if ( isset( $_COOKIE["micookie"] ) ) {
	echo "Hola ";
	echo $_COOKIE["micookie"];
} else {
	?>

    <form action="5.php" method="GET">

        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <br><br>

    </form>

	<?php
} ?>


</body>
</html>
</html>