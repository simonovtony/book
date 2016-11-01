<?php

if(@$_REQUEST['text'])
    echo htmlspecialchars($_REQUEST['text']) . "<hr>";

?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <textarea name="text" cols="60" rows="10"></textarea>
    <br>
    <input type="submit">
</form>