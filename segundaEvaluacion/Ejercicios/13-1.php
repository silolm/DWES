<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Progenitor {
            public $apellido;

            public function __construct($apellido) {
                $this->apellido = $apellido;
            }

            public function miApellido() {
                echo $this->apellido;
            }
        }

        class Descendiente extends Progenitor {
            public $nombre;

            public function __construct($apellido, $nombre) {
                parent::__construct($apellido);
                $this->nombre = $nombre;
            }

            public function miApellido() {
                echo $this->nombre . " " . $this->apellido;
            }
        }

        $progenitor = new Progenitor("Silla");
        echo "Progenitor: ";
        $progenitor->miApellido();

        echo "<br>";

        $descendiente = new Descendiente("Silla", "Mario");
        echo "Descendiente: ";
        $descendiente->miApellido();
    ?>
</body>
</html>