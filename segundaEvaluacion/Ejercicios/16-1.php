<!DOCTYPE html>
<html lang="en">
<body>
<?php
$xml = simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");
echo $xml;
echo "<h2>" . $xml->channel->title . "</h2><br/><br/>";

foreach ($xml->channel->item as $elemento) {
    echo $elemento->title;
    echo "<br />";
    echo "<a href=" . $elemento->link . ">" . "Link de la noticia" . "<a>";
    echo "<br />";
}
?>
</body>
</html>