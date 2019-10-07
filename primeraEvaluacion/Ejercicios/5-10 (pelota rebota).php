<html>
<head>
    <title>
        Simulador de paloma mensajera
    </title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
    <style type="text/css">
        div.map {
            float: left;
            text-align: center;
            border: 1px solid #666;
            background-color: #fcfcfc;
            margin: 5px;
            padding: 1em;
        }

        span.casa, span.paloma, span.paloma2 {
            font-weight: bold;
            color: red;
        }

        span.aire {
            color: blue;
        }

    </style>
</head>
<body>

<h1>
    <?php

    $tamañoMapa = 10;

    # Posicionar la paloma

    do {
        $pelotaX = rand(0, $tamañoMapa - 1);
        $pelotaY = rand(0, $tamañoMapa - 1);

        $direccionX = 1;
        $direccionY = 1;

        $contadorDeRebotes = 0;


    } while ((abs($pelotaX - $tamañoMapa) < $tamañoMapa / 2) && (abs($pelotaY - $tamañoMapa) < $tamañoMapa / 2));
    # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
    # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
    # absoluto, esto es, la cifra sin signo.

    do {
        #Acercar la paloma a su casa

        $unChoque = false;

        if ($pelotaX + $direccionX == $tamañoMapa || $pelotaX + $direccionX == -1) {
            $direccionX *= -1;
            $unChoque = true;
        }
        if ($pelotaY + $direccionY == $tamañoMapa || $pelotaY + $direccionY == -1) {
            $unChoque = true;
            $direccionY *= -1;
        }

        if ($unChoque) $contadorDeRebotes++;

        $pelotaX += $direccionX;
        $pelotaY += $direccionY;


        #Mostrar el mapa actual
        echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
        # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

        for ($y = 0; $y < $tamañoMapa; $y++) {
            for ($x = 0; $x < $tamañoMapa; $x++) {
                if ($x == $pelotaX && $y == $pelotaY) {
                    echo '<span class="paloma">0</span>'; #Paloma
                } else {
                    echo '<span class="aire">.</span>'; #Aire
                }

                echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
            }

            echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
        }

        echo "pelotaX=$pelotaX pelotaY=$pelotaY";
        echo "</pre>rebotes= $contadorDeRebotes</div>\n ";


    } while ($contadorDeRebotes < 6);

    ?>

</h1>

</body>

</html>