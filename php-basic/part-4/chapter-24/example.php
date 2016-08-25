<?php

$inFile = 'file.in';

$p = strrpos($inFile, '.');
if($p)
    $outFile = substr($inFile, 0, $p);
else
    $outFile = $inFile;
$outFile .= ".out";

echo $outFile;

?>