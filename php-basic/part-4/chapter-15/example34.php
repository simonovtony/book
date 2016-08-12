<?php

echo md5("hash"), "<br>";

echo crc32("hash"), "<br>";

echo crypt("hash", "salt"), "<br>";

echo "<br>";

echo md5(rand()), "<br>";

echo crc32(rand()), "<br>";

echo crypt("hash", rand()), "<br>";

?>