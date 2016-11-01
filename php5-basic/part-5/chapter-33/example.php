<?php

class Base {
    private   $private_var;
    protected $protected_var;
    public    $public_var;

    public function __construct($private_var = "private", $protected_var = "protected", $public_var = "public") {
        $this->private_var = $private_var;
        $this->protected_var = $protected_var;
        $this->public_var = $public_var;
    }

    public function method() {
        echo "method", "<br>";
    }

    public function consts() {
        echo __CLASS__, "<br>";
        echo __METHOD__, "<br>";
    }
}

class Derived extends Base {

}

$base = new Base();
$base->method();

$derived = new Derived(1, 2, 3);
$derived->method();

$base->consts();

?>