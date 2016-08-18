<?php

echo gmdate("d.m.Y H:i:s"), "<br>";
echo gmdate("d.m.Y H:i:s", time()), "<br>";

echo "<hr>";

echo gmmktime(), "<br>";
echo gmmktime(gmdate("H"), gmdate("i"), gmdate("s"), gmdate("m"), gmdate("d"), gmdate("Y"));

?>