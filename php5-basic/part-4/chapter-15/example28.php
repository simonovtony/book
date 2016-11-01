<?php

$year = date('Y');
$month = date('m');
$day = date('d');

$isodate = sprintf("%04d-%02d-%02d", $year, $month, $day);

echo $isodate;

?>