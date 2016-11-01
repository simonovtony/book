<?php

require_once "lib/config.php";

require_once "PHP/OutputBuffering.php";

$h = new PHP_OutputBuffering();

    echo "Начало внешнего перехвата.<br>";

    $formatter = inner();

    echo "Конец внешнего перехвата.";

    $text = "$h<br>Функция вернула: \"$formatter\"";

$h = null;

echo $text;

exit;

function inner() {
    $buf = new PHP_OutputBuffering();

    echo "Этот текст попадет в буфер.";

    return "<b>{$buf}</b>";
}

?>