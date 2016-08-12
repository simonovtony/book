<?php

$list = array(
    1, "hello", "world", 1, "world", "hello"
);
        
$array = array_count_values($list);

echo "<pre>";
print_r($array);
echo "</pre>";

?>