<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

if ($_GET["nombre"] != "") {
    header("Location: 7-7V2.html");
    exit;
} else {
    header("Location: 7-7.html");
    exit;
    #termina con exit, para que no se envíe nada más.
}


?>

</body>
</html>
</html>