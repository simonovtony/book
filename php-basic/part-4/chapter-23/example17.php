<?php

function finalize() {
    echo "finalize";
    $f = fopen("finalize", "wt");
    fwrite($f, "finalize");
    fflush($f);
    fclose($f);
}

register_shutdown_function("finalize");

//exit;
//die(123);
// или просто конец скрипта

?>