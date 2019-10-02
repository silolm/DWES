<html>
<body>

<table border="1">

    <?php

    $articulos = "1";
    while ($articulos <= 10) {
        echo "<tr>";

        echo ($articulos % 2 == 0) ? "<td>$articulos par</td>" : "<td>$articulos impar</td>";

        $primo = "0";
        $num = "1";

        while ($articulos > $num) {
            if ($articulos % $num == 0) $primo++;

            $num++;
        }

        echo ($primo >= 2) ? "<td>No es primo</td>" : "<td>Es primo</td>";

        echo "</tr>";

        $articulos++;
    }

    ?>

</table>

</body>

</html>