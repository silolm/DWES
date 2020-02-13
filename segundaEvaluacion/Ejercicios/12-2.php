<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
<?php

#Declaración de funciones

// Función que devuelve una conexción establecida con el servidor
function establecerConexcion()
{
    $servidor = "localhost";
    $username = "mario";
    $password = "m1234";
    $basedatos = "bdprueba";
    return mysqli_connect($servidor, $username, $password, $basedatos);
}

// Crea opciones con los datos de los empleados que dan como resultado de la query
function crearOpciones($conn)
{

    $consulta = "SELECT * from empleados;";
    $result = mysqli_query($conn, $consulta);

    while ($fila = mysqli_fetch_array($result)) {

        $dni = $fila["DNI"];
        $nombre = $fila["nombre"];
        $sueldo = $fila["sueldo"];
        $plus = $fila["plus"];

        echo "<option value='$dni'>$dni - $nombre - $sueldo - $plus </option>";
    }
}

//Función que inserta a un nuevo empleado tomando los datos del post pasado pasado
function insertarEmpleado($conn)
{
    $consulta = "SELECT max(DNI) AS resultado from empleados;";
    $result = mysqli_query($conn, $consulta);
    $row = mysqli_fetch_assoc($result);
    $dni = $row['resultado'] + 1;
    $nombre = $_POST["nombre"];
    $sueldo = $_POST["sueldo"];
    $plus = $_POST["plus"];

    $consulta = "INSERT INTO empleados VALUES ($dni, '$nombre', $sueldo, $plus);";

    mysqli_query($conn, $consulta);
    echo(mysqli_error($conn));
    mysqli_close($conn);
    header("Location: 12-2.php");
}

//Elimina al empleado que ha sido seleccionado utilizando el valor obtenido del post
function eliminarEmpleado($conn)
{
    $valor = $_POST["listado"];
    $consulta = "DELETE from empleados WHERE DNI like '$valor';";
    mysqli_query($conn, $consulta);
    header("Location: 12-2.php");
}


//Función que crea los 2 formularios necesarios para el ejercicio cuando _POST['nombre'] no ha sido creado
function crearFormularios($conn)
{
    echo("Añadir nuevo empleado");
    echo '<form action="12-2.php" method="POST">';
    echo '<br>';
    echo 'Introduzca el Nombre:';
    echo '<br>';
    echo '<input type="text" name="nombre">';
    echo '<br>';
    echo 'Introduzca el Sueldo:';
    echo '<br>';
    echo '<input type="number" name="sueldo">';
    echo '<br>';
    echo 'Introduzca el plus:';
    echo '<br>';
    echo '<input type="number" name="plus">';
    echo '<br>';
    echo '<input type="submit" value="enviar">';
    echo '</form>';

    echo '<form action="12-2.php" method="POST">';
    echo '<br>';
    echo 'Listado de empleados';
    echo '<br>';
    echo '<select name="listado">';

    crearOpciones($conn);

    echo '</select>';
    echo '<br>';
    echo '<input type="submit" value="Eliminar">';
    echo '</form>';
}

# Crear conexión
$conn = establecerConexcion();

# Comprobar conexión
if (!$conn)
    die("Conexi&ocacuten fallida: " . mysqli_connect_error());

if (isset($_POST["listado"]))
    eliminarEmpleado($conn);
elseif (!isset($_POST["nombre"]))
    crearFormularios($conn);
else
    insertarEmpleado($conn);

?>
</body>

</html>