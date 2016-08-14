<?php

$file = "lock.txt";

fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die("Не могу открыть файл!");

flock($f, LOCK_EX);

fwrite($f, "Some text.");

fflush($f);

flock($f, LOCK_UN);     

fclose($f);

?>