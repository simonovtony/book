<?php

$f = fopen("file.txt", "r");

fseek($f, 14, SEEK_CUR);
$text = fgets($f);
echo $text, "<br>";

echo "<hr>";

fseek($f, 1, SEEK_SET);
$text = fgets($f);
echo $text, "<br>";

echo "<hr>";

fseek($f, -14, SEEK_END);
$text = fgets($f);
echo $text, "<br>";

fclose($f);

?>