<?php

$f = fopen("file.txt", "wt");

$str = "Some text.\n";
$len = strlen($str);
for($i = 0; $i < 3; $i++) {
    fputs($f, $str, $len);
}

fclose($f);

$f = fopen("file.txt", "rt");

$str = "";
for($i = 0; $i < 3; $i++) {
    $str .= fgets($f);
}

echo "<pre>";
echo $str;
echo "<pre>";

fclose($f);

?>