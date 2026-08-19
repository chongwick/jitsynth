<?php
// 65-bit hexadecimal number
$hex = '10000000000000041';

for ($i = 0; $i < 200; ++$i) {
    $characterReferenceCode = 0;

    for ($j = 0, $len = strlen($hex); $j < $len; ++$j) {
        $characterReferenceCode *= 16;
        $characterReferenceCode += ord($hex[$j]) - 0x0030;
    }

    assert($characterReferenceCode > 0x10FFFF);
}
?>
OK
