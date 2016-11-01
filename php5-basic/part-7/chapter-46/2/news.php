<html><body>
<h2>Последние новости:</h2>
<?php $f = fopen("../news.txt", "r"); ?>
<?php for($i = 1; !feof($f) && $i <= 5; $i++): ?>
    <li><?= $i ?>-я новость: <?= fgets($f, 1024) ?></li>
<?php endfor; ?>
</body></html>