<?php
$object = new StdClass();
$object->a = str_repeat("a", 2);
phpinfo(INFO_VARIABLES);
$array = [0];
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array[1]) );
