<html>

<head>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
        div.map {
            float: left;
            text-align: center;
            border: 1px solid #666;
            background-color: #fcfcfc;
            margin: 5px;
            padding: 1em;
        }

        span.casa,
        span.paloma {
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

        $tamanyoMapa = 10;
        $casaX = 0;
        $casaY = 0;
        $palomaX = 0;
        $palomaY = 0;

        init($tamanyoMapa);

        do {
            aproximarPaloma();
            repintar($tamanyoMapa);
        } while ($palomaX != $casaX || $palomaY != $casaY);


        // FUNCIONES
        function init($tamanyoMapa){
            global $casaX, $casaY, $palomaX, $palomaY;
            do {
                $casaX = rand(0, $tamanyoMapa - 1);
                $casaY = rand(0, $tamanyoMapa - 1);
                $palomaX = rand(0, $tamanyoMapa - 1);
                $palomaY = rand(0, $tamanyoMapa - 1);
            } while ((abs($casaX - $palomaX) < $tamanyoMapa / 2) && (abs($casaY - $palomaY) < $tamanyoMapa / 2));
        }

        function aproximarPaloma(){
            global $palomaX, $palomaY, $casaX, $casaY;
            if ($palomaX < $casaX)
                $palomaX++;
            elseif ($palomaX > $casaX)
                $palomaX--;
            if ($palomaY < $casaY)
                $palomaY++;
            elseif ($palomaY > $casaY)
                $palomaY--;
        }

        function repintar($tamanyoMapa){
            global $casaX, $casaY, $palomaX, $palomaY;

            echo '<div class="map" style="width: ' . $tamanyoMapa . 'em;"><pre>';
            
            for ($y = 0; $y < $tamanyoMapa; $y++) {
                for ($x = 0; $x < $tamanyoMapa; $x++) {
                    if ($x == $casaX && $y == $casaY)
                        echo '<span class="casa">&</span>';
                    elseif ($x == $palomaX && $y == $palomaY)
                        echo '<span class="paloma">%</span>';
                    else
                        echo '<span class="aire">.</span>';

                    echo ($x != $tamanyoMapa - 1) ? " " : "";
                }
                echo "\n";
            }
            echo "</pre>palomax=$palomaX palomaY=$palomaY</div>\n";
        }
        ?>
    </h1>
</body>

</html>