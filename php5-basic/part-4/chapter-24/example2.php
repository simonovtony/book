<?php

$fullPath = '/home/simonovtony/file.txt';

$slash1 = strrpos($fullPath, '/');
$slash2 = strrpos($fullPath, '\\');

$slash = max($slash1, $slash2);

$dirName = substr($fullPath, 0, $slash);
$fileName = substr($fullPath, $slash + 1, 10000);

echo "DIR: " . $dirName, "<br>";
echo "FILE: " . $fileName, "<br>";

?>