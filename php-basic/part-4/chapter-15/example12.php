<?php

$str = "Hello World!";

echo strlen($str), "<br>";

echo strpos($str, 'ello'), "<br>";
echo strpos($str, 'ello'), "<br>";

echo strrpos($str, 'ello'), "<br>";
echo strrpos($str, 'ololo'), "<br>";

echo strcmp($str, "Hello World!"), "<br>";
echo strcmp($str, "Hello"), "<br>";
echo strcmp($str, "Hello World!123"), "<br>";

echo strcasecmp($str, "hello World!"), "<br>";
echo strcasecmp($str, "Hello"), "<br>";
echo strcasecmp($str, "Hello World!123"), "<br>";

?>