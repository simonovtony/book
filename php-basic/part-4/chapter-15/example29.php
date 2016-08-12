<?php

$var = 123456789.123;

echo number_format($var, 2), "<br>";
echo number_format($var, 4), "<br>";

echo number_format($var, 2, ',', '.'), "<br>";
echo number_format($var, '4', ' | ', '_'), "<br>";

//sscanf($str, $format);
//fscanf($handle, $format);

?>