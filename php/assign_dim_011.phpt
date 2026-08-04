<?php
$my_var = null < 
set_error_handler(function($code, $msg) use(&$my_var) {
	echo "Err: $msg\n";
    $my_var[] = $my_var = 0;
});
try {
    $my_var[] = "";
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
?>
DONE
