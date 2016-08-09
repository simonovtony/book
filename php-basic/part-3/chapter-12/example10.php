<?php

$matrix = array(
    array(10, 20, 30),
    array(0, 1, 2),
    array(-10, -20, -30)
);

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        if($matrix[$i][$j] == 0)
            break (2);
    }
}

if($i < 10)
    echo 'Найден нулевой элемент в матрице!';

?>