<?php
function customErrorHandler($fErrNo,$fErrStr,$fErrFile,$fErrLine) {
echo "error :".$fErrStr."\n";
}
function f_0() {
    if (true) {
        return;
    }
    if (!true) {
        return true;
    }
}
function f_1() {
    if (true) {
        $lazy = true;
        $mem = $lazy ? 0 : 1;
        echo "ResultSet is " . ($mem > $mem0 ? "longer" : ($mem == $mem0 ? "not shorter" : ($mem <= $mem0 / 2 ? "more than twice shorter" : "a bit shorter"))) . " than without lazy fetching\n";
    }
}
function f_2() {
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    $arc_name = __DIR__ . "/bug40228.zip";
    if (true) {
        echo "error :".$fErrStr."\n";
    }
}
function f_3() {
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    var_dump($e->getMessage());
}
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
