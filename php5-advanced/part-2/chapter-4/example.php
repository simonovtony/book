<?php

header("Content-Type: text/plain");

class StaticExample {
    static public $aNum = 0;

    static public function sayHello() {
        print "Привет!";
    }
}

print StaticExample::$aNum;
print "\n";
StaticExample::sayHello();

?>