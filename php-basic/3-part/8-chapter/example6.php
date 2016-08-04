<?php

    $path = "c:/windows";
    $name = "win";
    $ext = "com";
    
    $fullPath = "$path/$name.$ext";
    echo $fullPath;
    echo "<br>";
    $fullPath = $path . "/" . $name . "." . $ext;
    echo $fullPath;

?>
