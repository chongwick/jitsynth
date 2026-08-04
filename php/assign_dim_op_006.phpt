<?php
$my_var = null;
set_error_handler(function() use(&$my_var) {
    $my_var = 0;
});

$my_var[0000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000] .= "xyz";
var_dump($my_var);
?>
