<?php

require_once "exceptions.php";

try {
    printDocument();
} catch (IFileException $e) {
    echo "Файловая ошибка: {$e->getMessage()}.<br>";
} catch (Exception $e) {
    echo "Неизвестное исключение: <pre>", $e, "</pre>";
}

function printDocument() {
    $printer = "//./printer";
    if(!file_exists($printer))
        throw new NetPrinterWriteException($printer);
}

?>