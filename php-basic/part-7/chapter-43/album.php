<?php

$imgDir = "img";
@mkdir($imgDir, 0777);

if(@$_REQUEST['doUpload']) {
    $data = $_FILES['file'];
    $tmp = $data['tmp_name'];
    if(@file_exists($tmp)) {
        $info = @getimagesize($_FILES['file']['tmp_name']);
        if(preg_match('{image/(.*)}is', $info['mime'], $p)) {
            $name = "$imgDir/" . time() . "." . $p[1];
            move_uploaded_file($tmp, $name);
        } else {
            echo "<h2>Попытка добавить файл недопустимого формата!</h2>";
        }
    } else {
        echo "<h2>Ошибка закачки #{$data['error']}!</h2>";
    }
}

$photos = array();
foreach(glob("$imgDir/*") as $path) {
    $sz = getimagesize($path);
    $tm = filemtime($path);
    $photos[$tm] = array(
        'time' => $tm,
        'name' => basename($path),
        'url'  => $path,
        'w'    => $sz[0],
        'h'    => $sz[1],
        'wh'   => $sz[3],
    );
}

krsort($photos);

?>
<html>
    <body>
        <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="doUpload" value="Закачать новую фотографию">
        </form>
        <?php foreach($photos as $n => $img): ?>
            <p>
                <img src="<?= $img['url'] ?>"
                     <?= $img['wh'] ?>
                     alt="Добавлена <?= date("d.m.Y H:i:s", $img['time']); ?>">
            </p>
        <?php endforeach; ?>
    </body>
</html>
