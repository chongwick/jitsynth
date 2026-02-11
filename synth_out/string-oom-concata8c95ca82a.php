<?php
function f_0() {
    $array = [0];
    $ar = array_values($array);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $heredoc = <<<EOT
        key
        EOT;
    }
    return true;
}
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$datefmt->parse('abc');
