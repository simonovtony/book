<?php

foreach(preg_grep('/^ex/s', glob("*")) as $fn)
    echo "Файл примера: $fn<br>";

?>