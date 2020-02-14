<?php
function listaProductos(){
    $link = mysqli_connect('localhost', 'mario','m1234', 'pollofrito');
    $result = mysqli_query($link, 'SELECT nombre, coste FROM productos');

    if (!$link)
        echo "conexion fallida";

    $productossArray = array();

    while ($fila = mysqli_fetch_array($result)){
        $productossArray[] = $fila;
    }

    mysqli_close($link);
    return $productossArray;
}