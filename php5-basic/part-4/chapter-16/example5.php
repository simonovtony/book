<?php

function fCmp($f1, $f2) {
    if(is_dir($f1) && !is_dir($f2))
        return -1;
    if(!is_dir($f1) && is_dir($f2))
        return 1;
    if($f1 < $f2)
        return -1;
    elseif ($f1 > $f2) 
        return 1;
    else
        return 0;
}

$d = opendir(".");
while(false !== ($e = readdir($d)))
        $files[$e] = filesize($e);

uasort($files, "fCmp");

echo "<pre>";
print_r($files);
echo "</pre>";

?>