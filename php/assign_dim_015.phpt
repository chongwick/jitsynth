<?php
set_error_handler(function($code, $msg) use (&$my_var) {
	echo "Error: $msg\n";
    $my_var = 0;
});
$my_var[] = $y;
?>
DONE
