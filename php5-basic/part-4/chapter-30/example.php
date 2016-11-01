<?php

$fname = glob("*.{gif,jpg,png}", GLOB_BRACE);

$fname = $fname[mt_rand(0, count($fname) - 1)];

$size = getimagesize($fname);

echo "<pre>";
print_r($size);
echo "</pre>";

/*
 * $filename : string
 *      Относительный или обсолютный путь к файлу но не URL
 * getimagesize($filename) : array
 *
 * 0 => number
 *      Число определяющее ширину(width) изображения
 * 1 => number
 *      Число определяющее высоту(height) изображения
 * 2 => number
 *      Число определяющее тип изображения
 *      Константы:
 *      IMAGETYPE_GIF  => 1
 *      IMAGETYPE_JPEG => 2
 *      IMAGETYPE_PNG  => 3
 *      IMAGETYPE_SWF  => 4
 *      IMAGETYPE_PSD  => 5
 *      IMAGETYPE_BMP  => 6
 *      IMAGETYPE_TIFF => 7
 * 3 => string
 *      Формат строки: width="width" height="height"
 * "bits" => number
 *      Количество битов изображения
 * "channels" => number
 *      Количество каналов изображения:
 *          3 (rgb)
 *          4 (cmyk)
 * "mime" => string
 *      Тип изображения:
 *          "image/jpg"
 *          "image/gif"
 *          "image/png"
 */
?>