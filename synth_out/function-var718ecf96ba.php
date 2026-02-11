<?php
$fd = fopen('php://memory','w');
fwrite($fd, "foo");
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
