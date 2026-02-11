<?php
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$i = 0;
$loop_counter = 1;
$loop_counter++;
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
