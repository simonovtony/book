<?php

function myecho() {
    for($i = 0; $i < func_num_args(); $i++) {
        echo func_get_arg($i) . "<br>\n";
    }
}

myecho("Меркурий", "Венера", "Земля", "Марс");

?>