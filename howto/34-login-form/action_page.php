<?php 

    echo "<h1>Your input was received as:</h1>";
    $count = 0;
    $total = count($_POST);
    foreach($_POST as $key => $value) {
        $count++;
        echo "$key=$value";
        if($count != $total)
            echo "&amp;";
    }
    
?>
