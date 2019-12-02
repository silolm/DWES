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

<?php
$servidor = "localhost";
$username = "mario";
$password = "m1234";
$basedatos = "bdprueba";

$conn = mysqli_connect($servidor, $username, $password, $basedatos);
if (!$conn)
    die("Conexión fallida: " . mysqli_connect_error());

echo "Conexi&oacuten con &eacutexito <br><br>";

$consulta = "UPDATE empleados SET sueldo = sueldo + (sueldo * 10 / 100);";
$result = mysqli_query($conn, $consulta);

$consulta2 = "SELECT * FROM empleados";
$result = mysqli_query($conn, $consulta2);

echo "<table border = '1'>";

while ($fila = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $fila[0] . '</td><td>' . $fila[1] . "</td><td>" . $fila[2] . "</td><td>" . $fila[3] . "</td>";
    echo '</tr>';
}

echo "</table>";


mysqli_free_result($result);


mysqli_close($conn);
?>


</body>
</html>
</html>
