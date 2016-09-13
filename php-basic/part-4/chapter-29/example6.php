<?php

/*
 * session.gc_probability = 0 | 100 ...
 * php.ini, .htaccess, ini_set()
 * Устанавливает процент случая вызова сборки мусора сессий
 */

function ses_fname($key) {
    return dirname(__FILE__) . "/sessiondata/" . session_name() . "/$key";
}

function ses_open($save_path, $ses_name) {
    return true;
}

function ses_close() {
    return true;
}

function ses_read($key) {
    $fname = ses_fname($key);
    return @file_get_contents($fname);
}

function ses_write($key, $val) {
    $fname = ses_fname($key);
    @mkdir(dirname($fname), 0777);
    @mkdir(dirname(dirname($fname)), 0777);
    @file_put_contents($fname, $val);
    return true;
}

function ses_destroy($key) {
    return @unlink(ses_fname($key));
}

function ses_gc($maxlifetime) {
    $dir = ses_fname(".");
    foreach(glob("$dir/*") as $fname) {
        if(time() - filemtime($fname) >= $maxlifetime) {
            @unlink($fname);
            continue;
        }
    }
    @rmdir($dir);
    return true;
}

session_set_save_handler(
    'ses_open', 'ses_close',
    'ses_read', 'ses_write',
    'ses_destroy', 'ses_gc'
);

session_name("test1");
session_start();

$_SESSION['count'] = @$_SESSION['count'] + 1;

?>

<h2>Счетчик</h2>
В текущей сессии работы с браузером Вы открыли эту страницу
<?= $_SESSION['count'] ?> раз(а).<br>
Закройте обнулить счетчик.<br>
<a href="<?= $_SERVER['SCRIPT_NAME'] ?>" target="_blank">
    Открыть дочернее окно браузера
</a>.