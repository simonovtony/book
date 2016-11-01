<?php

$return = 0;
//system("dir");
system("dir", $return);
echo "<br>return: $return", "<br>";

echo "<hr>";

$output = 0;
//exec("dir", $output);
exec("dir", $output, $return);
echo "<pre>";
print_r($output);
echo "</pre>";
echo "<br>return: $return", "<br>";

echo "<hr>";



?>