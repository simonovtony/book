<?php

echo uniqid(), "<br>";
echo uniqid("ASD"), "<br>";

echo "<hr>";

echo uniqid(md5(mt_rand(0, 1000)));

?>