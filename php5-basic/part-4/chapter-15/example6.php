<?php

$str = "<?php ?>";

if(strval(strpos($str, "<?")) != "") 
    echo "это PHP-программа";

?>