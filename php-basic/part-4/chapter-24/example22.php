<?php

$hightlight = "Hello World!";

$re = preg_quote($hightlight, "/");

$re = preg_replace('/\s+/', '\\s+', $re);

echo $re;

?>