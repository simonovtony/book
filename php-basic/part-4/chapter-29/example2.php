<?php

session_name("test");

session_start();

$_SESSION['count'] = @$_SESSION['count'] + 1;

?>

<h2>Счетчик</h2>

В текущей сессии работы с браузером Вы открыли эту страницу

<?= $_SESSION['count'] ?> раз(а). <br>

Закройте браузер, чтобы обнулить этот счетчик.<br>

<a href="<?= $_SERVER['SCRIPT_NAME'] ?>?<?= SID ?>">
    Нажмите сюда для обновления страницы!
</a>
