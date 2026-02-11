<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
function f_0() {
    if (true) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    return false;
}
function f_1() {
    imagesetthickness($im, $thickness);
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $im = imagecreate(800, 800);
    imagecolorallocate($im, 255, 255, 255);
}
