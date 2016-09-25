<?php

require_once "lib/config.php";

require_once "MyFileFind.php";

echo "<pre>Содержимое корневого каталога:\n";

print_r(MyFileFind::readdir("/"));

print_r(MyFileFind::readdir("/"));

echo "Вот что в итоге находится в кэше модуля:\n";

print_r(MyFileFind::$cache);

?>