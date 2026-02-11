<?php
if (true) {
}
try {
    $a = new DateTime("2009-01-01", null);
    echo $a->format(DateTime::COOKIE);
} catch (Exception $e) {}
if (true) {
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    file_put_contents($tmpFileIn, $originalEnvelopeData);
}
