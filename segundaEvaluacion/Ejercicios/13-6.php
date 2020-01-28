<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <?php
        class Mapa{
            public $tamanyo = 10;
        }

        class Casa{
            public $x;
            public $y;

            public function __construct($tamanyoMapa){
                $this->x = rand(1, $tamanyoMapa - 1);
                $this->y = rand(1, $tamanyoMapa - 1);
            }
        }

        class Paloma{
            public $x;
            public $y;

            public function __construct($tamanyoMapa){
                $this->x = rand(1, $tamanyoMapa - 1);
                $this->y = rand(1, $tamanyoMapa - 1);
            }

            public function moverHaciaCasa($casaX, $casaY){}
        }

        $mapa = new Mapa();

        $paloma1 = new Paloma($mapa->tamanyo);
        $paloma2 = new Paloma($mapa->tamanyo);

        $casa = new Casa($mapa->tamanyo);

        while (($paloma1->x == $paloma2->x && $paloma1->y == $paloma2->y)
            && (($casa->x == $paloma1->x && $casa->y == $paloma1->y)
                && ($casa->x == $paloma2->x && $casa->y == $paloma2->y))
        ){
            $paloma1 = new Paloma($mapa->tamanyo);
            $paloma2 = new Paloma($mapa->tamanyo);
            $casa = new Casa($mapa->tamanyo);
        }

        // Movemos palomas
        do {
            // paloma1
            if ($paloma1->x > $casa->x)
                $paloma1->x--;
             elseif ($paloma1->x < $casa->x) 
                $paloma1->x++;
            
            if ($paloma1->y > $casa->y) 
                $paloma1->y--;
             elseif ($paloma1->y < $casa->y) 
                $paloma1->y++;
            

            // paloma2
            if ($paloma2->x > $casa->x) 
                $paloma2->x--;
             elseif ($paloma2->x < $casa->x) 
                $paloma2->x++;
            
            if ($paloma2->y > $casa->y)
                $paloma2->y--;
            elseif ($paloma2->y < $casa->y)
                $paloma2->y++;
    

            echo '<div class="map" style="width: 10em;"><pre>';

            for ($y = 0; $y < $mapa->tamanyo; $y++) {
                for ($x = 0; $x < $mapa->tamanyo; $x++) {
                    if ($x == $casa->x && $y == $casa->y)
                        echo '<span class="casa">x</span>'; //Casa
                    elseif ($x == $paloma1->x && $y == $paloma1->y)
                        echo '<span class="paloma">%</span>'; #Paloma1
                    elseif ($x == $paloma2->x && $y == $paloma2->y) 
                        echo '<span class="paloma">&</span>'; #Paloma2
                     else
                        echo '<span class="aire">.</span>'; #Aire
                    echo ($x != $mapa->tamanyo - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                }
                echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
            }
            echo "palomaX=$paloma1->x palomaY=$paloma1->y\n";
            echo "palomax2=$paloma2->x palomaY2=$paloma2->y\n";
            echo "</pre>casaX=$casa->x casaY=$casa->y</div>\n";
        } while ($paloma1->x != $casa->x || $paloma1->y != $casa->y && $paloma2->x != $casa->x || $paloma2->y != $casa->y);
        ?>
</body>

</html>