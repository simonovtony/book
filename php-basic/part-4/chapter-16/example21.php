<?php

extract($_SERVER);

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo "<hr>";
/////////////////////////////////////////////////////

extract($_SERVER, EXTR_PREFIX_ALL, "E");
echo $E_COMSPEC;

?>