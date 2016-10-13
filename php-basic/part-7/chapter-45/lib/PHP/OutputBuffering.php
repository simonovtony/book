<?php

class PHP_OutputBuffering {
    private static $buffers = array();

    private $level;

    private $flushed;

    public function __construct($handle = null) {
        $prevLevel = ob_get_level();

        self::$buffers[$prevLevel] = ob_get_contents();

        if($handle !== null)
            ob_start($handle);
        else
            ob_start();

        $this->level = ob_get_level();
    }

    public function __destruct() {
        if($this->flushed)
            return;
        ob_end_clean();
        unset(self::$buffers[$this->level]);
    }

    public function __toString() {
        if($this->flushed)
            return false;
        if(ob_get_level() == $this->level)
            return ob_get_contents();
        else
            return self::$buffers[$this->level];
    }

}

?>