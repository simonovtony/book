<?php

$f = fopen("file.txt", "rt");

$current_seek = ftell($f);

fseek($f, -14, SEEK_END);

echo fgets($f), "<br>";

fseek($f, $current_seek, SEEK_SET);

echo fgets($f), "<br>";

fclose($f);

?>