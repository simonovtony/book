<?php

if(@$_REQUEST['doUpload']) {
    $myFile = $_FILES['myFile'];
    $name     = $myFile['name'];
    $type     = $myFile['type'];
    $tmp_name = $myFile['tmp_name'];
    $size     = $myFile['size'];
    $error    = $myFile['error'];
    echo "Файлы закачаны на сервер:<br>";
    echo "<pre>" . print_r($_FILES, true) . "</pre>";
    if($error != UPLOAD_ERR_OK) {
        switch($error) {
            case UPLOAD_ERR_NO_FILE:
                echo "Пользователь не выбрал файл в браузере<br>";
                break;
            case UPLOAD_ERR_INI_SIZE:
                echo "Превышен максимальный размер файла, задаваемый в директиве upload_max_filesize файла php.ini<br>";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                echo "Превышен размер, задаваемый в необязательном поле формы<br>";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "В результате обрыва соединения файл не был докачан до конца<br>";
                break;
            default:
                echo "Ошибка файла!";
                break;
        }
        return;
    }
    echo "Нет ошибки, файл закачался<br>";
    // copy($myFile['tmp_name'], "./{$myFile['name']}");
    if(move_uploaded_file($myFile['tmp_name'], "./{$myFile['name']}")) {
        echo "Файл сохранен на сервере<br>";
    } else {
        echo "Не удалось сохранить файл на сервере<br>";
    }
}

?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>"
      method="post"
      enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit" name="doUpload" value="Закачать">
</form>
