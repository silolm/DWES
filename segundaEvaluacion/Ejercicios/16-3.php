<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<?php

$ciudades = array("Valencia", "Barcelona", "Madrid");
$APIKEY="f3d5281b792c932eb2d15d8b5bb85135";

foreach ($ciudades as $ciudad) {
    $url="http://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&mode=xml&APPID=".$APIKEY;
    $respuesta= file_get_contents($url);
    $xml=simplexml_load_string($respuesta) or die("Error: no se puede crear");
    $pais=$xml->city[name];
    $temperatura=$xml->temperature[value];
    echo "<br><br>";
    echo "Ciudad: ".$pais."<br>";
    echo "Temperatura: ".$temperatura."<br>";
    echo "<PRE>";
    echo "</PRE>";
}
?>
</body>
</html>