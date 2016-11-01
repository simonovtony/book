<?php

define("LIB_ROOT", "lib");

require_once LIB_ROOT . '/library_name.php';

test();

echo "<hr>"; ////////////////////////////////////////////////

$libRoot = 'lib';

require_once "$libRoot/library_name.php";

test();

echo "<hr>"; ////////////////////////////////////////////////

require_once getenv("DOCUMENT_ROOT") . "/lib/config.php";

require_once 'library_name.php';

test();

echo "<hr>"; ////////////////////////////////////////////////

$sep = getenv("COMSPEC") ? ";" : ":";

ini_set("include_path", ini_get("include_path") . $sep . getenv("DOCUMENT_ROOT") . "/lib");

require_once 'library_name.php';

test();

echo "<hr>"; ////////////////////////////////////////////////

ini_set("include_path", getenv("DOCUMENT_ROOT") . "/lib");

require_once 'library_name.php';

test();

echo "<hr>"; ////////////////////////////////////////////////

echo ini_get('include_path'), "<br>";

?>