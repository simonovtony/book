<?php

$headers = getallheaders();
header("Content-type: text/plain");
print_r($headers);

echo "\n\n\n\n\n\n\n";

print_r($_SERVER);

?>