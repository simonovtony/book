<form action="warnoff.php">
    <input type="submit" name="doGo" value="Click!">
</form>

<?php

if(@$_REQUEST['doGo'])
    echo "Вы нажали кнопку!";

?>