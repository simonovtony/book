<?php

class Dump {

    const VAR_PRINT = 0;
    const VAR_DUMP = 1;
    const VAR_EXPORT = 3;
    const VAR_ECHO = 4;

    public static function make($var, $type = Dump::VAR_PRINT) {
        echo "<pre>";
        switch($type) {
            case static::VAR_PRINT:
                print_r($var);
                break;
            case static::VAR_DUMP:
                var_dump($var);
                break;
            case static::VAR_EXPORT:
                var_export($var);
                break;
            case static::VAR_ECHO:
                if(is_object($var)) {
                    if(!method_exists($var, '__toString')) {
                        throw new DumpException();
                    }
                }
                echo $var;
                break;
            default:
                throw new DumpException();
        }
        echo "</pre>";
    }
}

class DumpException extends Exception { }

?>