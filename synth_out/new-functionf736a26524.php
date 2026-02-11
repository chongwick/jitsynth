<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
$tz1 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
try {
    $list = [];
    asort($list);
} catch (Exception $e) {}
if (true) {
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
}
var_dump(filter_var($input, FILTER_VALIDATE_URL));
