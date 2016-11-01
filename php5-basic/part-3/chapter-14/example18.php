<?php

$a = 100;
function test() {
    global $a;
    unset($a);
}
test();
echo $a;

?>