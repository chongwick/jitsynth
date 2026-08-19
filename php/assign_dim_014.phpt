<?php
set_error_handler(function($code, $err) {
    echo "Error: $err\n";
    $GLOBALS['a'] = null;
});
$a[$y] = function(){};
?>
DONE
