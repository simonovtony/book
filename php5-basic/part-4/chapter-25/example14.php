<?php

$str = "sullivan=paul&names[roy]=noni&names[read]=tom";
parse_str($str, $out);

echo "<pre>";
print_r($out);
echo "</pre>";

echo "<hr>";

$arr = array(
    'key' => 'value',
    'array' => array(
        'key' => 'value'
    )
);
$out = http_build_query($arr);
echo "<pre>";
print_r($out);
echo "</pre>";

echo "<hr>";

$url = "http://username:password@example.com:80/path?arg=value#anchor";
$out = parse_url($url);
echo "<pre>";
print_r($out);
echo "</pre>";

?>