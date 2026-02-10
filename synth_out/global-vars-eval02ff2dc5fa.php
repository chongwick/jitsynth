<?php
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
$from = ini_get('sendmail_from');
call_user_func(array("static","ok"));
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$b = new SplObjectStorage();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
