<?php
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});

try {
    if (!is_scalar($a)) {
        undefined_function('Null');
    }
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
?>
