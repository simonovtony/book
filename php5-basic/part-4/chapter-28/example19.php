<?php

require_once "mysql_connect.php";
require_once "mysql_qw.php";

define("TBLNAME", "guestbook");

mysql_qw('
    CREATE TABLE IF NOT EXISTS ' . TBLNAME . ' (
        id INT AUTO_INCREMENT PRIMARY KEY,
        stamp TIMESTAMP,
        name VARCHAR(60),
        text TEXT
    )
') or die(mysql_error());

if(@$_REQUEST['doAdd']) {
    $element = $_REQUEST['element'];
    if(ini_get("magic_quotes_gpc"))
        $element = array_map("stripslashes", $element);
    mysql_qw('
        INSERT INTO ' . TBLNAME . ' SET name = ?, text = ?
    ', $element['name'], $element['text']) or die(mysql_error());
    Header("Location: {$_SERVER['SCRIPT_NAME']}?" . time());
    exit();
}

if($delid = @$_REQUEST['delete']) {
    mysql_qw('DELETE FROM ' . TBLNAME . ' WHERE id = ?', $delid) or die(mysql_error());
}

$result = mysql_qw('
    SELECT *, UNIX_TIMESTAMP (stamp) AS stamp
    FROM ' . TBLNAME . ' 
    ORDER BY stamp DESC
') or die(mysql_error());

for($book = array(); $row = mysql_fetch_assoc($result); $book[] = $row);

?>

<form action="" method="post">
    <table>
        <tr valign="top">
            <td>Ваше имя:</td>
            <td>
                <input type="text" name="element[name]">
            </td>
        </tr>
        <tr valign="top">
            <td>Текст сообщения:</td>
            <td>
                <textarea name="element[text]" cols="60" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="doAdd" value="Добавить">
            </td>
        </tr>
    </table>
</form>
<hr>
<?php foreach($book as $element): ?>
    <b>
        <?= date("d.m.Y", $element['stamp']) ?>
        <?= htmlspecialchars($element['name']) ?>
    </b> написал:
    <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?delete=<?= $element['id'] ?>">
        [удалить]
    </a>
    <br>
    <blockquote>
        <?= nl2br(htmlspecialchars($element['text'])) ?>
    </blockquote>
    <hr>
<?php endforeach; ?>
