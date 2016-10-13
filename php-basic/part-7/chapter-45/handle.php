<?php

ob_start();

    echo "From delusion lead me to truth.<br>\n";

    ob_start();

        echo "From death lead me to immortality.<br>\n";

        $second = ob_get_contents();

    ob_end_clean();

    echo "From darkness lead me to light.<br>\n";

    $first = ob_get_contents();

ob_end_clean();

$first  = preg_replace('/^/m', '&nbsp;&nbsp;', trim($first));

$second = preg_replace('/^/m', '&nbsp;&nbsp;', trim($second));

echo "<i>Содержимое первого буфера:</i><br>$first";
echo "<i>Содержимое второго буфера:</i><br>$second";

?>