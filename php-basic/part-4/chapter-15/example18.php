<?php

$userData = "Симонов Антон 25 лет";

echo '<a href="/script.php?param=' . urlencode($userData) . '">Ссылка</a>', "<br>";

echo urlencode($userData), "<br>";

echo urldecode(urlencode($userData)), "<br>";

echo rawurlencode($userData), "<br>";

echo rawurldecode(rawurlencode($userData)), "<br>";

?>