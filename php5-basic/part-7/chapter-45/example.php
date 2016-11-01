<?php

echo "<hr>";

echo "Hello World!";

ob_clean();

ob_end_clean();

ob_start();

echo "<hr>";

echo "Hello World!";

$content = ob_get_contents();

ob_end_clean();

echo $content;

echo "<hr>";

ob_start();

echo "Hello World!";

ob_end_flush();

echo "<hr>";

ob_start();

    echo ob_get_level(), "<br>";

    ob_start();

        echo ob_get_level(), "<br>";

    ob_get_flush();

ob_end_flush();

echo ob_get_level(), "<br>";

echo "<hr>";

require_once "lib/config.php";
require_once "PHP/OutputBuffering.php";

$h1 = new PHP_OutputBuffering();
$h2 = new PHP_OutputBuffering();
/* ERROR
$h1 = null;
$h2 = null;
*/
$h2 = null;
$h1 = null;

echo "<hr>";

function ob_linerize($text) {
    return preg_replace('/[\r\n\s]+/s', ' ', trim($text));
}

ob_start("ob_gzhandler", 9);

echo "Hello, World!<br>";

ob_end_flush();

?>