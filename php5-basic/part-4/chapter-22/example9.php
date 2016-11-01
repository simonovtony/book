<?php

function makeCal($year, $month) {
    $wday = jddayofweek(gregoriantojd($month, 1, $year));
    if($wday == 0)
        $wday = 7;
    $n = -($wday - 2);
    $cal = array();
    for($y = 0; $y < 6; $y++) {
        $row = array();
        $notEmpty = false;
        for($x = 0; $x < 7; $x++, $n++) {
            if(checkdate($month, $n, $year)) {
                $row[] = $n;
                $notEmpty = true;
            } else {
                $row[] = "";
            }
        }
        
        if(!$notEmpty)
            break;
        $cal[] = $row;
    }
    return $cal;
}

$now = getdate();
$cal = makeCal($now['year'], $now['mon'] - 1);

?>

<table border="1">
    <tr>
        <td>Пн</td>
        <td>Вт</td>
        <td>Ср</td>
        <td>Чт</td>
        <td>Пт</td>
        <td>Сб</td>
        <td style="color: red">Вс</td>
    </tr>
    <?php foreach($cal as $row): ?>
    <tr>
        <?php foreach($row as $i => $v): ?>
        <td style="<?php echo $i == 6 ? 'color: red;' : ''; ?>">
            <?php echo $v ? $v : "&nbsp;"; ?>
        </td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>