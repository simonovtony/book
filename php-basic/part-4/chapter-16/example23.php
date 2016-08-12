<?php

$book = array(
    array(
        "name" => "vk",
        "url"  => "https://vk.com",
        "text" => "social network",
    ),
    array(
        "name" => "facebook",
        "url"  => "https://facebook.com",
        "text" => "social network",
    ),
);

?>

<table width="100%">
    <?php foreach($book as $entry): ?>
    <?php extract(array_change_key_case($entry, CASE_UPPER)); ?>
        <tr>
            <td>Имя: <?php echo $NAME ?></td>
            <td>Адресс: <?php echo $URL ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <?php echo $TEXT ?>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
    <?php endforeach; ?>
</table>