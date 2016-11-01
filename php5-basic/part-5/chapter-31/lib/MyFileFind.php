<?php

require_once "File/Find.php";

class MyFileFind
{
    const EXT = "php";
    static $cache = array();

    function readdir($dir)
    {
        if (isset(self::$cache[$dir]))
            return self::$cache[$dir];

        return self::$cache[$dir] = File_Find::glob(".*", $dir, self::EXT);
    }
}

echo "File " . __FILE__ . " loaded.<br>";

?>