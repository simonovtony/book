<?php

$bindata = pack("nvc*", 0x1234, 0x5678, 65, 66);

echo $bindata, "<br>";

$array = unpack("c2chars/nint", $bindata);

echo "<pre>";
var_dump($array);
echo "</pre>";

?>