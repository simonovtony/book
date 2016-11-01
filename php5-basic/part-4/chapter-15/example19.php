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

// htmlspecialchars_decode('&lt;br&gt;');

?>

<?php foreach($book as $k => $v): ?>
    Имя: <?php echo $v['name'] ?><br>
    Текст: <?php echo htmlspecialchars($v['text']) ?><br>
<?php endforeach; ?>