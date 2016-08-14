<?php

$lines = file("file.txt");

echo "<pre>";
print_r($lines);
echo "</pre>";

echo "<hr>";

$f = fopen($fname = "file.txt", "rt");

$lines = explode("\n", fread($f, filesize($fname)));

echo "<pre>";
print_r($lines);
echo "</pre>";

fclose($f);

?>