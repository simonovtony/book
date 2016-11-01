<?php

$re = "a(((((.*)*)*)*)*)*b";
$st = "abcdefgh";

$t = microtime(true);
$result = preg_match("/$re/", $st);
printf("PCRE($result): %.2f c<br>", microtime(true) - $t);

$t = microtime(true);
$result = ereg($re, $st);
printf("POSIX($result): %.2f c<br>", microtime(true) - $t);

?>