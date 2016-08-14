<?php

$file = "lock.txt";

fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die("Не могу открыть файл!");

flock($f, LOCK_SH);

echo fread($f, filesize($file));

flock($f, LOCK_UN);

fclose($f);

?>