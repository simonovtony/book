<?php

$f = fopen("/home/user/file.txt", "rt") or die("Ошибка!");

$f = fopen("http://www.php.net/", "rt") or die("Ошибка!");

$f = fopen("ftp://user:pass@example.com/a.txt", "wt") or die("Ошибка!");

?>