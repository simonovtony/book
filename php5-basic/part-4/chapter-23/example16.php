<?php

$filename = './lib/file.dat';
$file = @fopen($filename, 'r') or die("Не могу открыть $filename!");

/*
$filename = './lib/file.dat';
($file = @fopen($filename, 'r')) || die("Не могу открыть $filename!");
*/

?>