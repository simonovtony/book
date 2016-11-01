<?php

$FNAME = "book.txt";

if(@$_REQUEST['doAdd']) {
    $f = fopen($FNAME, "a");
    if(@$_REQUEST['text'])
        fputs($f, $_REQUEST['text'] . "\n");
    fclose($f);
    $rnd = time();
    header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}?$rnd");
    exit();
}

$gb = @file($FNAME);
if(!$gb)
    $gb = array();

?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    Текст: <br>
    <textarea name="text"></textarea><br>
    <input type="submit" name="doAdd" value="Добавить">
</form>

<?php foreach($gb as $text): ?>
    <?= htmlspecialchars($text) ?><br><hr>
<?php endforeach; ?>
