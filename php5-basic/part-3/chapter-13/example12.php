<?php

$names = array(
    "Weaving" => "Hugo",
    "Chong"   => "Marcus",
);
$dossier["Anderson"] = array(
    "name" => "Thomas",
    "born" => "1962-03-11",
);

function SomeFuncThatReturnsArray() {
    return array(
        1, 2, 3, 4, 5, 10,
    );
}

echo $names["Weaving"], "<br>";
echo $dossier["Anderson"]["name"], "<br>";

/* error
echo (SomeFuncThatReturnsArray())[5];
*/

$result = SomeFuncThatReturnsArray();
echo $result[5], "<br>";

?>