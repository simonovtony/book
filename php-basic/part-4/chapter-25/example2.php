<?php

if(headers_sent()) {
    echo "Заголовки отправлены!";
    echo "Вызывать header не безопасно!";
}
else {
    echo "Заголовки еще не отправленны!";
    echo "Вызываем header можно!";
    header("Location: http://www.whatisthematrix.com");
}

?>