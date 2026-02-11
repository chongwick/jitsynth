<?php
$dir_handle = opendir( __DIR__ );
closedir( $dir_handle );
$array_object = array();
var_dump( end($array_object) );
