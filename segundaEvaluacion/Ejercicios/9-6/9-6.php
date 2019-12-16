<?php
$servidor  = "localhost";
$username  = "mario";
$password  = "m1234";
$basedatos = "bdprueba";

$nombre = $_POST["Nombre"];
$dni    = "SELECT MAX(DNI) FROM empleados";
$sueldo = $_POST["Sueldo"];
$plus   = $_POST["Plus"];


# Crear conexión
$conn = mysqli_connect( $servidor, $username, $password, $basedatos );

# Comprobar conexión
if ( ! $conn ) {
	die( "Conexi&ocacuten fallida: " . mysqli_connect_error() );
}
echo "Conexi&oacuten con &eacutexito <br><br>";

$aux = mysqli_query( $conn, $dni );

while ( $incremento = mysqli_fetch_array( $aux ) ) {
	$dniIncremento = $incremento[0];

	$dniIncremento ++;
}

$consulta = "INSERT INTO empleados VALUES (" . $dniIncremento . ",'" . $nombre . "', " . $sueldo . " , " . $plus . ");";
$result   = mysqli_query( $conn, $consulta );
# Como no se trata de un SELECT, mysqli_query devuelve TRUE
# si se ha hecho correctamente y FALSE si ha habido error.
if ( $result == true ) {
	echo "Se ha insertado correctamente <br>";
} else {
	# La siguiente función muestra el último error, en caso
	# de haberlo.
	echo mysqli_error( $conn );
	die ( "Hubo un error" );
}

# Como no se trata de un SELECT, no hace falta el
# mysqli_free_result($result)


mysqli_close( $conn );

?>