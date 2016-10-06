<?php

if(@$_REQUEST['doUpload']) {
    echo '<pre>Содержимое $_FILES: ' . print_r($_FILES, true) . '</pre><hr>';
}

?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
    <h3>Выберите тип файлов в Вашей системе:</h3>
    Текстовый файл: <input type="file" name="input[a][text]"><br>
    Бинарный файл: <input type="file" name="input[a][bin]"><br>
    <input type="submit" name="doUpload" value="Отправить файл">
</form>
