<?php

echo ini_get('display_errors'), "<br>";

if (!ini_get('display_errors')) {
    $last_value = ini_set('display_errors', '1');
    echo $last_value, "<br>";
}

echo ini_get('display_errors'), "<br>";

// php.ini | .htaccess
// register_globals = On | Off

// php.ini | .htaccess
// magic_quotes_gpc On | Off

// php.ini | .htaccess | ini_set()
// max_execution_time = 30

// php.ini | .htaccess
// post_max_size = 8M

// php.ini | .htaccess
// upload_max_filesize = 2M

// php.ini | .htaccess | ini_set()
// include_path . | ./libs

// php.ini | .htaccess
// auto_prepend_file ./header.php | ./libs/header.php | ./*.php

// php.ini | .htaccess
// auto_append_file ./header.php | ./libs/header.php | ./*.php

// php.ini | .htaccess | ini_set()
// error_reporting E_ALL~E_NOTICE | E_ERROR | E_WARRNING | E_PARSE | E_NOTICE | E_CORE_ERROR | E_CORE_WARNING | E_STRICT | E_ALL

// php.ini | .htaccess | ini_set()
// display_errors On | Off

// php.ini | .htaccess | ini_set()
// log_errors On | Off

// php.ini | .htaccess | ini_set()
// error_log ./logs/ | ./

?>