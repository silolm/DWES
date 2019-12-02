<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        tr:nth-child(odd) {
            background-color: gold;
        }

        tr:nth-child(even) {
            background-color: lime;
        }
    </style>
    <title>Document</title>
</head>
<body>

<form action="7-1.php" method="post">

    Introduzca su nombre:
    <br>
    <input type="text" name="DNI" placeholder="DNI">
    <br>
    <input type="text" name="Nombre" placeholder="Nombre">
    <br>
    <input type="number" name="Sueldo" placeholder="Sueldo">
    <br>
    <input type="number" name="Plus" placeholder="Plus" readonly="readonly" value="250"> ➪ PLUS
    <br>
    <input type="submit" value="Enviar">
    <br><br>

</form>
<?php
$servidor = "localhost";
$username = "mario";
$password = "m1234";
$basedatos = "bdprueba";

$conn = mysqli_connect($servidor, $username, $password, $basedatos);
if (!$conn)
    die("Conexión fallida: " . mysqli_connect_error());

$consulta = "UPDATE empleados SET sueldo = sueldo + (sueldo * 10 / 100);";
$result = mysqli_query($conn, $consulta);

$consulta2 = "SELECT * FROM empleados";
$result = mysqli_query($conn, $consulta2);


mysqli_free_result($result);
mysqli_close($conn);
?>


</body>
</html>
</html>