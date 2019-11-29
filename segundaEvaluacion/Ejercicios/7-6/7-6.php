<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$uploads_dir = 'C:\wamp64\www\phpStorm';
$tmp_name = $_FILES["archivo"]["tmp_name"];
$name = basename($_FILES["archivo"]["tmp_name"]);

mkdir("C:\wamp64\www\phpStorm" . $_POST["nombre"], 0777);
move_uploaded_file($tmp_name, "$uploads_dir/$name" . $_POST["nombre"]);
?>

</body>
</html>
</html>