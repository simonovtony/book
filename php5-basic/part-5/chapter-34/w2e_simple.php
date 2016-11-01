<?php

require_once "lib/config.php";

require_once "PHP/Exceptionizer.php";

suffer();

echo "<b>Дальше должно идти обычное сообщение PHP.</b>";

fopen("fork", "r");

function suffer() {
    $w2e = new PHP_Exceptionizer(E_ALL);
    try {
        fopen("spoon", "r");
    } catch (E_WARNING $e) {
        echo "<pre><b>Перехвачена ошибка!</b>\n", $e, "</pre>";
    }
    unset($w2e);
}

?>