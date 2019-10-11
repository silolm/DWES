<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>

<table border='1'>
    <?php
    $contador = 0;
    do {
        $contador++;
        if ($contador % 2 == 0) {
            echo "<tr>";
            echo "<td>" . $contador . " par </td>";
            echo "<tr>";
        } else {
            echo "<tr>";
            echo "<td>" . $contador . " impar </td>";
            echo "<tr>";
        }

        if ($contador > 0) {
            $i = 2;
            $primo = true;
            while ($i <= ($contador / 2) && $primo) {
                $primo = ($contador % $i++ != 0);
            }
            if ($primo) {
                echo "<tr>";
                echo "<td>es primo</td>";
                echo "</tr>";
            } else {
                echo "";
                echo "<td>no es primo</td>";
                echo "<tr>";
            }
        }
    } while ($contador < 10)
    ?>
</table>

</body>
</html>