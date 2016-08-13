<?php

$f = fopen("file.txt", "r");

$st = "";
while(!feof($f)) {
    $st .= fgets($f);
}

echo "<pre>";
echo $st;
echo "</pre>";

?>