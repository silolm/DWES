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

	?>

    <form action="10-3.php" method="GET">
        <input type='hidden' name='borar' value='borrar'>
        <br>
        <input type='submit' name='borrarcookie' value='Borrar Cookie'>
        <br><br>
    </form>

	<?php
	if ( isset( $_GET['borrar'] ) ) {
		$value   = "";
		$expires = time() - 3600;
		setcookie( $name, $value, $expires, $path, $domain, $secure, $HttpOnly );
	}
} else {
	?>

    <form action="10-3.php" method="GET">

        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <br><br>

    </form>
	<?php

	$servidor  = "localhost";
	$username  = "mario";
	$password  = "m1234";
	$basedatos = "bdprueba";

	$conn = mysqli_connect( $servidor, $username, $password, $basedatos );

	$consulta = "SELECT max(dni) FROM empleados";

	$result = mysqli_query( $conn, $consulta );

	$lastDNI = mysqli_fetch_array( $result );

	echo $lastDNI[0];

	$ultDNI = intval( $lastDNI[0] );

	$ultDNI ++;

	if ( isset( $_GET['nombre'] ) ) {
		$insert = "INSERT INTO empleados (dni,nombre,sueldo,plus) VALUES ('$ultDNI','$_GET[nombre]','2000', '1000')";
		mysqli_query( $conn, $insert );
	}

	mysqli_close( $conn );
}
?>

</body>
</html>
</html>