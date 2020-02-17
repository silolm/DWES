<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div>
    <?php

    $xml = simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");
    # Se muestra el título del feed RSS
    echo "<h2>" . $xml->channel->title . "</h2><br/><br/>";
    # Se muestra la primera noticia:
    foreach ($xml->channel->item as $elemento) {
        echo $elemento->title;
        echo "<br />";
        echo "<a href='" . $elemento->link . "'>" . "Link de la noticia" . "</a>";
        echo "<br />";
    }

    ?>
</div>

<div>
    <?php

    $xml = simplexml_load_file("http://www.bbc.co.uk/mundo/index.xml");
    # Se muestra el título del feed RSS
    echo "<h2>" . $xml->channel->title . "</h2><br/><br/>";
    # Se muestra la primera noticia:
    foreach ($xml->channel->item as $elemento) {
        echo $elemento->title;
        echo "<br />";
        echo "<a href='" . $elemento->link . "'>" . "Link de la noticia" . "</a>";
        echo "<br />";
    }

    ?>
</div>

<div>
    <?php

    $xml = simplexml_load_file("https://e00-marca.uecdn.es/rss/futbol/primera-division.xml");
    echo "<h2>" . $xml->channel->title . "</h2><br/><br/>";
    # Se muestra la primera noticia:
    foreach ($xml->channel->item as $elemento) {
        echo $elemento->title;
        echo "<br />";
        echo "<a href='" . $elemento->link . "'>" . "Link de la noticia" . "</a>";
        echo "<br />";
    }

    ?>
</div>



</body>
</html>