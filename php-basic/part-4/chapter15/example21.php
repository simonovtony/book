<?php

$book = array(
    array(
        'name' => 'key',
        'text' => 'value',
    ),
    array(
        'name' => 'title',
        'text' => '<p>text</p>',
    ),
    array(
        'name' => 'html',
        'text' => '<html><body>"Site"</body></html>',
    ),
);

?>

<?php foreach($book as $k => $v): ?>
    Имя: <?php echo $v['name'] ?><br>
    Текст: <?php echo strip_tags($v['text']) ?><br>
<?php endforeach; ?>