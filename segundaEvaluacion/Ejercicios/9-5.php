<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
# Si no hay una pulsación previa, muestra el formulario
if (!isset ($_POST["boton"])) {
    ?>

    <form action="5.php" method="post">

        <input type="text" name="Nombre" placeholder="Nombre">
        <br>
        <input type="number" name="DNI" placeholder="DNI">
        <br>
        <input type="number" name="Sueldo" placeholder="Sueldo">
        <br>
        <input type="number" name="Plus" placeholder="Plus" readonly="readonly" value="250"> ➪ PLUS
        <br>
        <input type="submit" value="Enviar">
        <br><br>

    </form>

    <?php
}

$nombre = $_POST["Nombre"];
$dni = $_POST["DNI"];
$sueldo = $_POST["Sueldo"];
$plus = $_POST["Plus"];


$servidor = "localhost";
$username = "mario";
$password = "m1234";
$basedatos = "bdprueba";


$conn = mysqli_connect($servidor, $username, $password, $basedatos);
if (!$conn)
    die("Conexión fallida: " . mysqli_connect_error());

$consulta = "INSERT INTO empleados VALUES (" . $nombre . ",'" . $dni . "', " . $sueldo . " , " . $plus . ");";
$result = mysqli_query($conn, $consulta);

if ($result == TRUE)
    echo 'OK';
else {
    echo mysqli_error($conn);
    die("Hubo un error");
}

mysqli_free_result($result);
mysqli_close($conn);
?>


</body>
</html>
</html>