<?php

require_once "lib/config.php";
require_once "PEAR/NameScheme.php";

echo PEAR_NameScheme::name2path("PHP_Autoload")."<br>";
echo PEAR_NameScheme::name2path("php_autoload")."<br>";
echo PEAR_NameScheme::name2path("PHP_AUTOLOAD")."<br>";

?>