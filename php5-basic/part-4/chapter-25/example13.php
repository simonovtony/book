<?php

require_once 'example12.php';

$url = "http://user@example.com:80/path?arg=value#anchor";
// $url = "/path?arg=value#anchor";
// $url = "thematrix.com";
// $url = "http://thematrix.com/#top

$parsed = parse_url($url);
parse_str(@$parsed['query'], $query);
$query['names']['read'] = 'tom';
$parsed['query'] = http_build_query($query);
$newurl = http_build_url($parsed);
echo "Старый URL: $url<br>";
echo "Новый: $newurl";

?>