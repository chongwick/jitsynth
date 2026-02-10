<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $g = 'hi';
    $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    $timestamp = "2005-11-08T11:22:07+03:00";
    var_dump( rtrim("234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );
}
