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
    <?php extract($entry, EXTR_OVERWRITE); ?>
        <tr>
            <td>Имя: <?php echo $name ?></td>
            <td>Адресс: <?php echo $url ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <?php echo $text ?>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
    <?php endforeach; ?>
</table>