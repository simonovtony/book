<?php

require_once "File/Logger.php";

class File_Logger_Debug extends File_Logger {

    public function __construct($fname) {
        parent::__construct(basename($fname), $fname);
    }

    public function debug($s, $level = 0) {
        $stack = debug_backtrace();
        $file = basename($stack[$level]['file']);
        $line = $stack[$level]['line'];
        $this->log("[at $file line $line] $s");
    }
}

?>