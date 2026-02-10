<?php
var_dump(__METHOD__);
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
var_dump(mysqli_get_server_version($link));
var_dump(lookup(513));
fclose($fp);
var_dump( end($test_array) );
