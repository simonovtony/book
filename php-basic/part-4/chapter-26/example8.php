<?php

include_once "example7.php";

$host = "google.com";

getmxrr($host, $mxes, $weights);

echo "Ящик *@$host обслуживают следующие почтовые машины:<br>";
for($i = 0; $i < count($mxes); $i++) {
    echo "<li><tt>{$mxes[$i]}</tt>";
    echo " (вес = {$weights[$i]})\n";
}

?>