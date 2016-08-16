<?php

echo "time(): " . time(), "<br>";

echo "<hr>";

list($frac, $sec) = explode(" ", microtime());
$time = $frac + $sec;
echo "microtime(): " . $time, "<br>";
echo "microtime(true)" . microtime(true), "<br>";

?>