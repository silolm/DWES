<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="get" action="7-4.php">
    <input type="number" name="operando1">
    <select name="operador">
        <option value="+">+
        </option>
        <option value="-">-
        </option>
        <option value="*">*
        </option>
        <option value="/">/
        </option>
    </select>
    <input type="number" name="operando2">
    <input type="submit" value="=">

</form>

<?php
$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operador = $_GET['operador'];
$solucion = 0;

if ($operador == "+")
    $solucion = $operando1 + $operando2;
else if ($operador == "-")
    $solucion = $operando1 - $operando2;
else if ($operador == "*")
    $solucion = $operando1 * $operando2;
else if ($operador == "/")
    $solucion = $operando1 / $operando2;

echo "<br> La solución es: " . $solucion;
?>

</body>
</html>
</html>