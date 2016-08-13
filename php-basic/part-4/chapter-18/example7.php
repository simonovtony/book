<?php

$f = fopen("./file.txt", "wt");

fwrite($f, "Some text.\nSome text.\nSome text.");

fclose($f);

$f = fopen("./file.txt", "rt");

echo "<pre>";
echo fread($f, 300);
echo "</pre>";

fclose($f);

?>