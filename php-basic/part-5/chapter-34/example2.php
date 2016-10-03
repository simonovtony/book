<?php

declare(exception_map='+standard:streams:*') {
    try {
        fopen("spoon", "r");
    } catch (Exception $e) {
        if($e->getCode() == 'standard:streams:E_NOENT') {
            echo "Ложка не существует!";
        }
    }
}

?>