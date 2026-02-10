<?php
$test = array("A\x00B" => "Hello world");
debug_zval_dump($test);
