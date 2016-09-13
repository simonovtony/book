<?php

$session_id = session_id(mt_rand(100000, 999999));

$session_name = session_name('session_name');

$session_path = session_save_path('./sessions');

session_start();

echo "Прошлый session_id:   " . $session_id, "<br>";
echo "Прошлый session_name: " . $session_name, "<br>";
echo "Прошлый session_path: " . $session_path, "<br>";

class MyClass {
    private $pri;
    protected $pro;
    public $pub;
    public function getProp() {
        return 123;
    }
}

$_SESSION['bool'] = true;
$_SESSION['int'] = 123;
$_SESSION['float'] = 123.123;
$_SESSION['array'] = array(0 => 123, 'key' => 'value');
$_SESSION['object'] = new MyClass();
$_SESSION['resource'] = mysql_connect('localhost', 'root', '');

?>