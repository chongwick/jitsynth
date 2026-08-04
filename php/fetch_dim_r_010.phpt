<?php
set_error_handler(function() {
    $GLOBALS['a'] = 0;
});
$a = [$y];
($a[$b]);
?>
DONE
