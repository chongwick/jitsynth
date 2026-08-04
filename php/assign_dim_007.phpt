<?php
set_error_handler(function() {
	$GLOBALS['x'] = $GLOBALS['y'];
});

function x(&$s) {
	$s[0] = 1;
};
$y = false;
x($y);
var_dump($x,$y);
?>
