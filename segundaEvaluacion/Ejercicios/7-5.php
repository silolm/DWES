<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if (empty($_GET['1'])) {

    ?>
    <form method="get" action="7-5.php">

        <input type="text" name="nombre" placeholder="Nombre">
        <input type="hidden" name="1" value="1">
        <input type="submit" value="enviar">

    </form>
    <?php
} elseif ($_GET['1'] == '1') {
    ?>
    <form method="get" action="5.php">

        <input type="text" name="vehiculo" placeholder="Vehículo">
        <input type="hidden" name="1" value="2">
        <input type="hidden" name="nombre" value="<?php echo $_GET['nombre'] ?>">
        <input type="submit" value="enviar">

    </form>

    <?php
} elseif ($_GET['1'] == '2')
    echo 'Hola ' . $_GET['nombre'] . ', su vehículo es: ' . $_GET['vehiculo'];
?>

</body>
</html>
</html>