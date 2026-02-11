<?php
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array[1]) );
