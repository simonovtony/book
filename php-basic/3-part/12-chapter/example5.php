<?php

$i = 1;
$p = 1;

?>

<? while($i < 32): ?>
    <?= $p, " " ?>

    <?
    $p = $p * 2;
    $i = $i + 1;
    ?>
<? endwhile; ?>