<?php

$birth = array(
    "Thomas Anderson" => "1962-03-11",
    "Keanu Reeves"    => "1962-09-02",
);

for(reset($birth); ($k = key($birth)); next($birth))
    echo "$k родился {$birth[$k]}<br>";
echo "<br>";
    
//////////////////////////////////////////////////////

for(end($birth); ($k = key($birth)); prev($birth))
    echo "$k родился {$birth[$k]}<br>";
echo "<br>";
    
//////////////////////////////////////////////////////

$birth = array(
    "Thomas Anderson" => "1962-03-11",
    0 => "none",
    "Keanu Reeves"    => "1962-09-02",
);

for(reset($birth); ($k = key($birth)); next($birth))
    echo "$k родился {$birth[$k]}<br>";
echo "<br>";

//////////////////////////////////////////////////////

for(reset($birth); ($k = key($birth)) !== false; next($birth))
    echo "$k родился {$birth[$k]}<br>";
echo "<br>";

?>