<?php

class Math_Complex1 {

    public $re, $im;

    function add(Math_Complex1 $y) {
        $this->re += $y->re;
        $this->im += $y->im;
    }

    function __toString()
    {
        return "({$this->im}, {$this->re})";
    }
}

?>