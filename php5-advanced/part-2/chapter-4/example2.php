<?php

header("Content-Type: text/plain");

class StaticExample {
    static public $aNum = 0;

    static public function sayHello() {
        self::$aNum++;
        print "Привет! (" . self::$aNum . ")\n";
    }
}

StaticExample::sayHello();
StaticExample::sayHello();
StaticExample::sayHello();

?>