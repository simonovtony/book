<?php

$A = array(
    "First" => array(
        10 => array(
            20 => "value"
        )
    )
);

echo $GLOBALS["A"]["First"][10][20];

?>