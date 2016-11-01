<?php

$OS_TYPE = "win";

if($OS_TYPE == "win") {
    
    function myChown($fname, $attr) {
        return 1;
    }
    
} else {
    
    function myChown($fname, $attr) {
        return chown($fname, $attr);
    }
    
}

echo myChown("test.txt", 755);

?>