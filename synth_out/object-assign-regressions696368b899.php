<?php
$plain = "The quick brown fox jumps over the lazy dog.";
$fn = "bug71263.bz2";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
file_put_contents($fn, $compressed);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
