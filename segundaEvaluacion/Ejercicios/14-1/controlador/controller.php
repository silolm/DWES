<?php

//Requier model
require_once('../modelo/modelo.php');

//extraer productos
$productos = listaProductos();

//requier vista
require('../vista/vista.php');