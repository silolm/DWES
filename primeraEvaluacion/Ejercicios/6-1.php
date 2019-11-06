<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$año = "2020";

if (strlen($año) != 4){
    echo "MAL";
}
else {
    if ($año % 4 == 0 && $año % 100 != 0 || $año % 400 == 0)
        echo "bisiesto";
    else {
        echo "no es bisiesto";
    }
}

?>
</body>
</html>