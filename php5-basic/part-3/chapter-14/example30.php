<?php

function myecho() {
    for($i = 0; $i < func_num_args(); $i++) {
        echo func_get_arg($i) . "<br>\n";
    }
}

function tabber($spaces) {
    $args = func_get_args();
    array_shift($args);
    $new = array();
    foreach($args as $st) {
        $new[] = str_repeat("&nbsp;", $spaces) . $st;
    }
    call_user_func_array("myecho", $new);
}

tabber(10, "Меркурий", "Венера", "Земля", "Марс");

?>