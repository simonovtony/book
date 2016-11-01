<?php

function increment($a) {
    echo "Текущее значение: $a<br>";
    $a++;
    echo "После увеличения: $a<br>";
}

$num = 10;
echo "Начальное значение: $num<br>";
increment(& $a);
echo "После вызова функции: $num<br>";

?>