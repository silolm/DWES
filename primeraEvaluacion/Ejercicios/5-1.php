<html>
<body>

<table border="1" align="center">
    <?php
    echo "<tr class='1'>";
    $cabecera = "0";
    while ($cabecera <= 10) {
        echo "<th>";
        echo $cabecera;
        echo "</th>";
        $cabecera++;
    }
    echo "</tr>";
    $x = 1;
    while ($x <= 10) {
        echo "<tr>";
        echo "<th>";
        echo $x;
        echo "</th>";
        $x++;

        $y = 1;

        while ($y <= 10) {
            $multiplicacion = $x * $y;
            echo "<td>";
            echo "$x" . "*" . "$y = " . $multiplicacion;
            echo "</td>";
            $y++;
        }
        echo "</tr>";
    }
    ?>
</table>

</body>

</html>