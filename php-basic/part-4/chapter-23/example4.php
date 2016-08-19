<?php

if(!isset($_REQUEST['name']))
    $_REQUEST['name'] = 'Значение "по умолчанию"';

?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
    <input type="text" name="name" size="40" value="<?= htmlspecialchars($_REQUEST['name']) ?>"><br>
    <input type="text" name="name" size="40" value="<?= htmlspecialchars(stripslashes($_REQUEST['name'])) ?>"><br>
    <input type="submit" name="submit" value="Go!">
</form>