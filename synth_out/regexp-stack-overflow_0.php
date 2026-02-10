<?php
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip->close();
function f_0() {
    try {
        return 0;
    } catch (Exception $e) {}
    if (true) {
        return serialize($this->data);
    }
}
print_r($str_instead);
