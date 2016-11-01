<?php

$f = fopen("trunc.txt", "w+t");

fwrite($f, "Some text.");

ftruncate($f, 4); 

fseek($f, 0, SEEK_SET);

echo fgets($f), "<br>";

fclose($f);

?>