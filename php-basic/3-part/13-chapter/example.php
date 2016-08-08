<?php

for($i = 0; $i < 10; $i++) {
    $v = "a$i";
    $$v = $i;
}

for($i = 0;; $i++) {
    $v = "a$i";
    if(!isset($$v))
        break;
    echo $$v, ", ";
}

echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";

?>
