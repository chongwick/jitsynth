<?php
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
var_dump(range('a', 'c', -1));
