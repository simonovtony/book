<?php
    
echo rand(), "<br>";
echo rand(-10, 10), "<br>";
echo mt_rand(), "<br>";
echo mt_rand(-10, 10), "<br>";

echo "<hr>";

$ourFile = fopen("largetextfile.txt", "r");

for($i = 0; $s = fgets($ourFile, 10000); $i++) {
    if(mt_rand(0, $i) == 0)
        $line = $s;
}

echo $line;

fclose($ourFile);

echo "<hr>";

$file = file("largetextfile.txt");
echo $file[mt_rand(0, count($file) - 1)];

echo "<hr>";

echo getrandmax(), "<br>";
echo mt_getrandmax(), "<br>";

echo "<hr>";

srand(123);

mt_srand(123);
for($i = 0; $i < 5; $i++)
    echo mt_rand() . " ";
echo "<br>";
mt_srand(123);
for($i = 0; $i < 5; $i++)
    echo mt_rand() . " ";

echo "<hr>";

mt_srand(time() + (float)microtime() * 1000000 + getmypid());
echo mt_rand();

?>