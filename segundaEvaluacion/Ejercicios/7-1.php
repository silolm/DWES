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
    <form action="7-1.php" method="post">

        Introduzca su nombre:
        <br>
        <input type="text" name="Nombre" placeholder="Nombre">
        <br>
        <input type="password" name="Password" placeholder="Password">
        <br>
        Sexo:
        Hombre <input type="radio" name="Hombre">
        Mujer <input type="radio" name="Mujer">
        <br>
        <select name="transporte">

            <option>Coche</option>

            <option>Avión</option>

            <option selected>Tren</option>

        </select>
        <br>
        Paypal: <input type="checkbox" name="Pago" value="PayPal">
        <br>
        <input type="text" name="textoArea" placeholder="Opiniones...">
        <br>
        <input type="submit" value="enviar">

    </form>

    <?php
}
echo '<br><br><br>';
echo 'Nombre: ' . $_POST["Nombre"];
echo '<br> Contraseña: ' . $_POST["Password"];
echo '<br> Hombre -' . $_POST["Hombre"] . '-';
echo '<br> Mujer -' . $_POST["Mujer"] . '-';
echo '<br> Transporte: ' . $_POST["Transporte"];
echo '<br> Tipo de pago: ' . $_POST["Pago"];
echo '<br> Opinión del usuario: ' . $_POST["textoArea"];
?>

</body>
</html>
</html>