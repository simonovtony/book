<?php

/*
 * session.auto_start = 0 | 1
 * php.ini, .htaccess, ini_set();
 * Автоматический запуск session_start()
 */

session_start();

if(!isset($_SESSION['count']))
    $_SESSION['count'] = 0;

$_SESSION['count'] = $_SESSION['count'] + 1;

?>

<h2>Счетчик</h2>

В текущей сессии работы с браузером Вы открыли эту страницу

<?= $_SESSION['count'] ?> раз(а).<br>

Закройте браузер что бы обнулить счетчик.<br>

<a href="<?= $_SERVER['SCRIPT_NAME'] ?>" target="_blank">Открыть дочернее окно браузера</a>.

<?php

if($_SESSION['count'] == 10) {
    $_SESSION = array();

    unset($_COOKIE[session_name()]);

    session_destroy();
}

?>
