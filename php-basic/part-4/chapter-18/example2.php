<?php

$f = fopen("/home/user/file.txt", "rt") or die("Ошибка!");

($f = fopen("/home/user/file.txt", "rt")) or die("Ошибка!");

$f = fopen("/home/user/file.txt", "rt") || die("Ошибка!");

$f = (fopen("/home/user/file.txt", "rt") || die("Ошибка!"));

?>