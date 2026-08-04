<?php
set_error_handler(function($_, $m) {
    throw new Exception($m);
});
try {
    $a = $b;
    NOT_REACHED;
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>
