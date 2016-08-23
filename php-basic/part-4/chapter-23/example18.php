<?php

$dump = 123;

// error
// eval("$clever = $dump");
eval("\$clever = \$dump;");
eval('$clever = $dump;');
echo $clever, "<br>";

echo "<hr>";

eval('for($i = 0; $i < 10; $i++) echo $i . " ";');

echo "<hr>";

for($i = 1; $i <= 1000; $i++)
    eval("function printSquare$i() { echo $i * $i; }");
printSquare303();

echo "<hr>";

$fname = "./test.htm";
$code = file_get_contents($fname, true);
eval("?>$code<?");

?>