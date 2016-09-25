<?php

require_once "lib/config.php";

require_once "PEAR/NameScheme/Autoload.php";

echo "<pre>Файлы в текущем каталоге:\n";

print_r(MyFileFind::readdir("."));

?>