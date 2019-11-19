<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if (!isset ($_GET ["regalo"])) {

    ?>
    <form action="5.php" method="get">
        Marque la casilla si quiere envoltorio para regalo:<br>

        <input type="checkbox" name="regalo" value="envolver">

        <br>

        <input type="submit" value="enviar">
    </form>

    <?php
    echo 'No se desea envoltorio';
} else
    echo "El cliente desea envolver el paquete";

?>


</body>
</html>
</html>