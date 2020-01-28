<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php

    abstract class Figura {
        private $color = "negro";
        private $relleno = false;

        public function producirColor() {
            return $this->color;
        }
        public function pintar($col) {
            $this->color = $col;
        }
        public function comprobarRelleno() {
            return $this->relleno;
        }
        public function rellenar() {
            $this->relleno = true;
        }
        public function vaciar() {
            $this->relleno = false;
        }
        abstract public function calcularArea();
    }

    class Circulo extends Figura {
        private $radio = 0;
        
        public function obtenerRadio() {
            return $this->radio;
        }
        public function ponerRadio($rad) {
            $this->radio = $rad;
        }
        
        public function calcularArea() {
            return M_PI * pow($this->radio, 2);
        }
    }

    class Cuadrado extends Figura {
        private $lado = 0;

        public function calcularLado() {
            return $this->lado;
        }
        public function aplicarLado($lad) {
            $this->lado = $lad;
        }
        public function calcularArea() {
            return pow($this->lado, 2);
        }
    }

    $miCirculo = new Circulo;
    $miCirculo->pintar("amarillo");
    $miCirculo->vaciar();
    $miCirculo->ponerRadio(30);
    echo "<h2>Mi c&iacuterculo</h2>";
    echo "<p>Mi c&iacuterculo tiene un radio de " . $miCirculo->obtenerRadio() . " cm." . "</p>";
    echo "<p>Es " . $miCirculo->producirColor() . " y est&aacute " . ($miCirculo->comprobarRelleno() ? " relleno." : " hueco.") . "</p>";
    echo "<p>El &aacuterea de mi c&iacuterculo es de " . $miCirculo->calcularArea(). " cm." . "</p>";

    $miCuadrado = new Cuadrado;
    $miCuadrado->pintar("violeta");
    $miCuadrado->rellenar();
    $miCuadrado->aplicarLado(89);
    echo "<h2>Mi cuadrado</h2>";
    echo "<p>Mi cuadrado tiene un lado de " . $miCuadrado->calcularLado(). " cm." . "</p>";
    echo "<p>Es " . $miCuadrado->producirColor() . " y est&aacute " . ($miCuadrado->comprobarRelleno() ? " relleno." : " hueco.") . "</p>";
    echo "<p>El &aacuterea de mi cuadrado es de " . $miCuadrado->calcularArea(). " cm." . "</p>";
    ?>
</body>

</html>