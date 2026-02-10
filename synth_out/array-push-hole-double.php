<?php
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
