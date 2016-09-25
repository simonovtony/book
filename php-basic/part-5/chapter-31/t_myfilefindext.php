<?php

require_once "lib/config.php";

require_once "lib-pear/config.php";
require_once "MyFileFindExt.php";

echo "<pre>";

print_r(MyFileFindExt::readdir("/"));

print_r(MyFileFindExt::readcurdir());

?>