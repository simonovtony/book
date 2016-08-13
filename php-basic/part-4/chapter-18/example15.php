<?php

echo basename("/home/somebody/somefile.txt"), "<br>";
echo basename("/"), "<br>";
echo basename("/."), "<br>";
echo basename("/./"), "<br>";

echo "<hr>";

echo dirname("/home/file.txt"), "<br>";
echo dirname("../file.txt"), "<br>";
echo dirname("/file.txt"), "<br>";
echo dirname("/"), "<br>";
echo dirname("file.txt");

echo "<hr>";

$fname = tempnam("./", "temp");
$f = fopen($fname, "r");
echo "$fname", "<br>";
fclose($f);

echo "<hr>";

$fname = tempnam('./', getmypid());
$f = fopen($fname, "r");
echo $fname, "<br>";
fclose($f);

echo "<hr>";

echo realpath("../t.php"), "<br>";
echo realpath("../"), "<br>";
echo realpath("."), "<br>";
echo realpath("./example.php");

?>