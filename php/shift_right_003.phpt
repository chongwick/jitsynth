<?php
function encodeDynamicInteger(int $int): string {
    $out = "";
    for ($i = 0; ($int >> $i) > 0x80; $i += 7) {
        $out .= \chr(0x80 | (($int >> $i) & 0x7f));
    }
    return $out . \chr($int >> $i);
}
$s = encodeDynamicInteger(235);
var_dump(strlen($s), ord($s[0]), ord($s[1]));
?>
