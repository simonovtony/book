<?php

$f = fopen("trunc.txt", "w+b");

ftruncate($f, 0);

fseek($f, 0, SEEK_SET);

fclose($f);

?>