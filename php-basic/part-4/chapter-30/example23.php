<?php

/*

list imagettftext($size, $angle, $fontfile, $text);
Функция рисует текст с использованием TrueType
Параметры:
    $image: resource - ресурс изображения, полученный с помощью imagecreate, imagecreatetruecolor или imagecreatefrom*(gif,jpeg,gif)
    $size: float - размер шрифта
    $angle: float - угл наклона
    $x: int - координата x
    $y: int - координата y
    $color: resource - ресурс цвета, полученный с помощью imagecolorallocate или imagecolorallocatealpha
    $fontfile: string - абсолютный путь к файлу с шрифтами *.ttf
    $text: string - произвольный текст для вывода
Результат:
    array(
        0 => $left_bottom_x,
        1 => $left_bottom_y,
        2 => $right_bottom_x,
        3 => $right_bottom_y,
        4 => $right_top_x,
        5 => $right_top_y,
        6 => $left_top_x,
        7 => $left_top_y,
    );

list imagettfbbox($image, $size, $angle, $x, $y, $color, $fontfile, $text);
Функция аналогична imagettftext за исключением что она не отображает текст а возвращает координаты

*/

function imagettfbbox_fixed($size, $angle, $fontfile, $text) {
    $horiz = imagettfbbox($size, 0, $fontfile, $text);

    $cos = cos(deg2rad($angle));
    $sin = sin(deg2rad($angle));

    $box = array();

    for($i = 0; $i < 7; $i += 2) {
        list($x, $y) = array($horiz[$i], $horiz[$i + 1]);
        $box[$i] = round($x * $cos + $y * $sin);
        $box[$i + 1] = round($y * $cos - $x * $sin);
    }

    return $box;
}

function imagettfsize($size, $angle, $fontfile, $text) {
    $box = imagettfbbox_fixed($size, $angle, $fontfile, $text);
    $x = array($box[0], $box[2], $box[4], $box[6]);
    $y = array($box[1], $box[3], $box[5], $box[7]);
    $width = max($x) - min($y);
    $height = max($y) - min($y);
    return array($width, $height, 0 - min($x), 0 - min($y));
}

function imagettfgetmaxsize($angle, $fontfile, $text, $width, $height) {
    $min = 1;
    $max = $height;
    while(true) {
        $size = round(($max + $min) / 2);
        $sz = imagettfsize($size, $angle, $fontfile, $text);
        if($sz[0] > $width || $sz[1] < $height) {
            $max = $size;
        } else {
            $min = $size;
        }
        if(abs($max - $min) < 2)
            break;
    }
    return $min;
}

function toUnicodeEntities($text, $form = "w") {
    $text = convert_cyr_string($text, $form, "i");
    $uni = "";
    for($i = 0, $len = strlen($text); $i < $len; $i++) {
        $char = $text{$i};
        $code = ord($char);
        $uni .= ($code > 175) ? "&#" . (1040 + ($code - 176)) . ";" : $char;
    }
    return $uni;
}

?>