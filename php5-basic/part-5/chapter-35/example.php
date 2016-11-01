<?php

require_once "lib/config.php";
require_once "Dump.php";
require_once "Math/Complex2.php";

interface TestInterface {

    function methodInterface();
}

/**
 * Class TestClass
 */
class TestClass {

    public static $testStaticVar;
    public $testVar;

    public function testStaticMethod($p1, $p2) {
        self::$testStaticVar = $p1 + $p2;
        return self::$testStaticVar;
    }
    public function testMethod($p1, $p2) {
        $this->testVar = $p1 + $p2;
        return $this->testVar;
    }

    public final function testFinal() {
        echo "final method";
    }
}

class TestClass2 extends TestClass implements TestInterface {

    public function methodInterface() {
        static $staticVar = 0;
        return $staticVar++;
    }
}

function testFunc($p1, $p2) {
    return $p1 + $p2;
}

/**
 * @return mixed $param
 */
function spoon($param) {
    static $staticBool = false;

    $int = 123;
    $string = "asd";
    $obj = new stdClass();

    return $param;
};

echo "<hr>";

$funcName = "trim";

echo call_user_func($funcName, "    What? What did I just say?   ");

echo "<hr>";

$args = array(101, 6);
$result = call_user_func_array("testFunc", $args);
echo $result;

echo "<hr>";

$args = array(101, 6);
$obj = new TestClass();
$result = call_user_func_array(array(& $obj, "testMethod"), $args);
echo $result;

echo "<hr>";

$args = array(101, 6);
$result = call_user_func_array(array("TestClass", "testStaticMethod"), $args);
echo $result;

echo "<hr>";

$obj = new ReflectionClass("TestClass");
// $obj = new ReflectionFunction("testFunc");
if($obj instanceof Reflector)
    echo "Классы Reflection расширяет интерфейс Reflector", "<br>";

echo "<hr>";

try {
    $obj = new ReflectionFunction("spoon");
    echo "string getName(): ", $obj->getName(), "<br>";
    echo "bool isInternal(): ", $obj->isInternal() ? "true" : "false", "<br>";
    echo "bool isUserDefined(): ", $obj->isUserDefined() ? "true" : "false", "<br>";
    echo "string getFileName(): ", $obj->getFileName(), "<br>";
    echo "int getStartLine(): ", $obj->getStartLine(), "<br>";
    echo "int getEndLine(): ", $obj->getEndLine(), "<br>";
    echo "string getDocComment(): ", $obj->getDocComment(), "<br>";
    echo "array getStaticVariable(): ";
    Dump::make($obj->getStaticVariables());
    echo "mixed invoke(array|string): ", $obj->invoke("param"), "<br>";
    echo "string __toString(): ", $obj, "<br>";
    echo "bool returnsReference(): ", $obj->returnsReference() ? "true" : "false", "<br>";
    echo "ReflectionParameter[] getParameters(): ", "<br>";
    Dump::make($obj->getParameters());
} catch (ReflectionException $e) {
    echo "Исключение: ", $e->getMessage();
}

echo "<hr>";

try {
    $obj = new ReflectionParameter("spoon", "param" /* 0 */);
    echo "string getName(): ", $obj->getName(), "<br>";
    echo "ReflectionClass getClass(): ";
    Dump::make($obj->getClass());
    echo "bool allowsNull(): ", $obj->allowsNull() ? "true" : "false", "<br>";
    echo "bool isPassedByReference(): ", $obj->isPassedByReference() ? "true" : "false", "<br>";
    echo "bool isDefaultValueAvailable(): ", $obj->isDefaultValueAvailable() ? "true" : "false", "<br>";
} catch (ReflectionException $e) {
    echo "Исключение: ", $e->getMessage();
}

echo "<hr>";

try {
    $obj = new ReflectionClass("TestClass2");
    Dump::make($obj, Dump::VAR_ECHO);
} catch (ReflectionException $e) {
    echo "Исключение: ", $e->getMessage();
}

echo "<hr>";

try {
    $obj = new ReflectionClass('Reflection');
    Dump::make($obj, Dump::VAR_ECHO);
} catch (ReflectionException $e) {
    echo "Исключение: ", $e->getMessage();
}

?>