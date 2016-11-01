<?php

class Math_Complex {

    public $re, $im;

    function add($re, $im) {
        $this->re += $re;
        $this->im += $im;
    }
}

?>