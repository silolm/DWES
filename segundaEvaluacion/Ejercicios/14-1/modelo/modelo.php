<?php

class Modelo {
    function __constructor(){
        $this->conexion = $this->conectar();
    }
}

function consultar(){
    $consulta = "SELECT * FROM Productos";
    $sql = mysqli_query($this->conexion, $consulta);
    $resultado = mysqli_fetch_all($sql);
    $json = json_encode($resultado);
    mysqli_close($this->conexion);

    echo $json;
}

function conectar{
    $user = "mario";
    $password = "m1234";
    $host = "127.0.0.1"
    $db = "tienda";

    $conexion = mysqli_connect($user, $password, $host, $db);

    if (!$conexion)
        die("Conexio&acutenn Fallida" . mysqli_connect_error);
        
    return $conexion;
    
}

?>