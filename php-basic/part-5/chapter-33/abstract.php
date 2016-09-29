<?php

interface I {
    public function F();
}

abstract class C implements I {
    /* Если не указать функцию F() то она становится абстрактной
    public function F() {

    }
    */
}

?>