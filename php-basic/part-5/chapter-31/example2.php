<?php

/*
require_once getenv('DOCUMENT_ROOT') . 'lib/config.php';
*/

require_once getenv('DOCUMENT_ROOT') . '/book/php-basic/part-5/chapter-31/lib/config.php';

require_once 'library_name.php';

test();

/* *** old style ***
$libRoot = '/book/php-basic/part-5/chapter-31/lib';
define('LIB_ROOT', '/book/php-basic/part-5/chapter-31/lib');
require_once "$libRoot/library_name.php";
require_once LIB_ROOT . '/library_name.php';
*/

?>