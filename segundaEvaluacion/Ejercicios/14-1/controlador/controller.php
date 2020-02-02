<?php
require_once '..modelo/modelo.php';
$modelo = new Modelo();

$peticion = $_GET["request"];

if ($peticion == "findAll")
$modelo->consultar();

?>