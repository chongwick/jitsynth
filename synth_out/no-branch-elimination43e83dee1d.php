<?php
if (true) {
}
try {
    echo "EXTR_BOTH",PHP_EOL;
} catch (Exception $e) {}
if (true) {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    foreach ($dirs as $d) {
        mkdir($prefix . $d);
    }
    mkdir($prefix . $d);
}
