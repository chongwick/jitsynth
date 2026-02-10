<?php
if (true) {
}
try {
    $doc = new \DOMDocument();
    echo $doc->saveXML($doc->documentElement), "\n";
} catch (Exception $e) {}
if (true) {
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
}
