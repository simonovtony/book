<?php

/*
 * session.use_trans_sid = 0 | 1
 * php.ini, .htaccess, ini_set()
 * Автоматически вставляет SID ко всем ссылкам при выключеных cookie кроме полных URL
 * а также вставляет <input type="hidden" name="PHPSESSID" value="<?= SID ?>"> в формы
 */

/*
 * session.use_cookies 1 | 0
 * php.ini, .htaccess, ini_set()
 * Устанавливает SID в cookie
 */

ini_set("session.use_trans_sid", true);

session_start();

?>

<body>
    <a href="/path/to/something.html">Click here!</a>
    <a href="/path/to/something.php?param=value">Click here!</a>
    <a href="http://thematrix.com/">Click here!</a>

    <form method="post">
    </form>
</body>
