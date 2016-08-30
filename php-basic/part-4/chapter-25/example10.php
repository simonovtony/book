<?php

echo "<pre>";
print_r(getallheaders());
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(getenv("HTTP_COOKIE"));
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>