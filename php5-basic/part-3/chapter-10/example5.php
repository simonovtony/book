<?php

$a = 10;
$b = 5;
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
echo $a % $b, "<br>";

$a = "Hello";
$b = ' world';
echo $a . $b, "<br>";
echo $a[0], "<br>";

$a = ($b = 4) + 5;
echo $a, "<br>";
$n = 6;
echo $n, "<br>";
$n += 1;
echo $n, "<br>";
$message = "Woken";
echo $message, "<br>";
$message .= " up $n times!";
echo $message, "<br>";

$a = 10;
$b = $a++;
echo "a=$a, b=$b", "<br>";

$a = 10;
$b = --$a;
echo "a=$a, b=$b", "<br>";

$a = 12; // 1100
$b = 2;  // 10
echo $a & $b, "<br>";
echo $a | $b, "<br>";
echo ~$a, "<br>";
echo $a << $b, "<br>";
echo $a >> $b, "<br>";

$a = 10;
$b = 5;
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

echo false, "<br>";
echo true, "<br>";

$hundred = 100;
if($hundred == 1) 
    echo "хм, странно... переменная равна 1!<br>";
if($hundred == true)
    echo "переменная истинна!<br>";

if("" == 0)
    echo "совпадение!", "<br>";

if("Universe" == 0)
    echo "совпадение!", "<br>";

if(((int)"Universe") == 0)
    echo "совпадение!", "<br>";

$x = array(1, 2, "3");
$y = array(1, 2, 3);
echo "Равны ли два массива? ";
var_dump($x == $y);
echo "<br>";

$x = array(1, 2, true);
$y = array(1, 2, 3);
echo "Равны ли два массива? ";
var_dump($x == $y);
echo "<br>";

class AgentSmith {}
$smith = new AgentSmith();
$wesson = new AgentSmith();
var_dump($smith == $wesson);
echo "<br>";

$int = 10;
$string = "10";
if($int == $string)
    echo "переменные равны", "<br>";

$zero = 0;
$tsss = "";
if($zero == $tsss)
    echo "переменные равны", "<br>";

$zero = 0;
$tsss = "";
if($zero === $tsss)
    echo "переменные эквиваленты", "<br>";

$yep = array("реальность", true);
$nein = array("реальность", "иллюзорна");
if($yep == $nein)
    echo "Два массива равны", "<br>";
if($yep === $nein)
    echo "Два массива эквивалентны", "<br>";

class AgentSmith2 {}
$smith = new AgentSmith2();
$wesson = new AgentSmith2();
if($smith == $wesson) 
    echo "Обьекты равны.", "<br>";
if($smith === $wesson)
    echo "Обьекты эквивалентны.", "<br>";
if($smith !== $wesson)
    echo "Обьекты не эквивалентны.", "<br>";

$a = false;
$b = true;
var_dump(!$a);
echo "<br>";
var_dump($a && $b);
echo "<br>";
var_dump($a || $b);
echo "<br>";

$logic = 0 && (time() > 100);
var_dump($logic);
echo "<br>";

?>