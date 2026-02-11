<?php
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
$unset_var = 10;
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub();
$date = '7.8.2010';
$unixtime = strtotime($date);
$date = new DateTime('@'.$unixtime);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $style = array();
    $i = 0;
    $style[$i++] = $color;
    $f_base = "67647私はガラスを食べられます.mov";
    $f = __DIR__ . DIRECTORY_SEPARATOR . $f_base;
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump(array_multisort($ar1));
}
