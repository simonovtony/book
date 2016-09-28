<?php

class Base {
    public final function test() {

    }
}

class Derive extends Base {
    /*
     * Ошибка
     */
    public function test() {

    }
}

?>