<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php
    $tabla = 1;
    $multiplicador = 1;
    $contador = 1;
    do {
        echo "<tr>";
        do {
            echo ($multiplicador == 1 && $contador == 1) ?
                "<th>" . $tabla . "</th>" :
                "<td>" . $tabla . "*" . $multiplicador . "=" . $tabla * $multiplicador . "</td>";

            $tabla++;
        } while ($tabla <= 10);

        $tabla = 1;

        if ($contador == 1) $contador++;
        else {
            $contador++;
            $multiplicador++;
        }

        echo "</tr>";
    } while ($multiplicador <= 10);

    ?>

</table>

</body>
</html>