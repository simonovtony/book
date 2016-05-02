<?php

$vote = $_REQUEST['vote'];

$filename = "poll_result.txt";

$content = file($filename);

$array = explode("||", $content[0]);

$yes = $array[0];

$no = $array[1];

if($vote == 0)
{
    $yes++;
}
if($vote == 1)
{
    $no++;
}

$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);

?>

<h2>Result:</h2>
<table>
    <tr>
        <td>Yes:</td>
        <td>
            <img src="php-58-ajax-poll/poll.gif" width="<?php echo (100 * round($yes / ($no + $yes), 2)); ?>" height="20">
            <?php echo (100 * round($yes / ($no + $yes), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>No:</td>
        <td>
            <img src="php-58-ajax-poll/poll.gif" width="<?php echo (100 * round($no / ($no + $yes), 2)); ?>" height="20">
            <?php echo (100 * round($no / ($no + $yes), 2)); ?>%
        </td>
    </tr>
</table>
