<?php
$a = [2147483647,2147483647,2147483647,3,0,0,32,2147483584,127];
echo @crc32(json_encode(bitwise_small_split($a))) . "\n";

function bitwise_small_split($val) {
    $split = 8;
    $len = count($val);
    while ($i != $len) {
        if (!$overflow) {
            $remaining -= $split;
            $overflow = $split <= $remaining ? 0 : $split - $remaining;
        } elseif (++$i != $len) {
            $fusion[$i] >>= $overflow;
            $remaining = 31 - $overflow;
            $overflow = $split <= $remaining ? 0 : $split - $remaining;
        }
    }
}
?>
