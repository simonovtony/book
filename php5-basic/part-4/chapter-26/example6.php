<?php

$ip = "72.52.91.14";
$host = gethostbyaddr($ip);
echo $host, "<br>";

$host = "php.net";
$ip = gethostbyname($host);
echo $ip, "<br>";

$host = "php.net";
$ips = gethostbynamel($host);
echo "<pre>";
print_r($ips);
echo "</pre>";

?>