<?php

$jd = gregoriantojd(10, 11, 1970);
echo "$jd<br>";
$gregorian = jdtogregorian($jd);
echo "$gregorian<br>";
$list = explode("/", $gregorian);
echo "<pre>";
print_r($list);
echo "</pre>";

echo "<hr>";

echo jddayofweek($jd);

?>