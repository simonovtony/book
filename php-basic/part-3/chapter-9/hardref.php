<?php
    $A = array(
        'вилка'      => '271 руб. 82 коп.',
        'сковородка' => '818 руб. 28 коп.'
    );
    $b = & $A['ложка'];
    echo "Элемент с индексом 'ложка': " . $A['ложка'] . "<br>";
    echo "Тип несуществующего элемента 'ложка': " . gettype($A['ложка']);
?>