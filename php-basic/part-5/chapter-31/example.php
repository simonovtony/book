<?php

/*
ini_set('include_path', getenv('DOCUMENT_ROOT') . '/lib');
ini_set('include_path', getenv('DOCUMENT_ROOT') . '/lib');
$sep = getenv('COMSPEC') ? ';' : ':';
ini_set('include_path', ini_get('include_path') . $sep . getenv('DOCUMENT_ROOT') . '/lib');
*/

$sep = getenv('COMSPEC') ? ';' : ':';

ini_set('include_path', ini_get('include_path') . $sep . getenv('DOCUMENT_ROOT') . '/book/php-basic/part-5/chapter-31/lib');

require_once 'library_name.php';

test();

?>