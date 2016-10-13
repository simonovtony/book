<?php

require_once "lib/config.php";

require_once "PHP/OutputBuffering.php";

$h1 = new PHP_OutputBuffering();

    echo "Текст в первом буфере.";

    $h2 = new PHP_OutputBuffering();

        echo "Текст во втором буфере.";

        $first = (string)$h1;
        $second = (string)$h2;

    $h2 = null;

$h1 = null;

echo "1: $first<br>";

echo "2: $second<br>";

?>