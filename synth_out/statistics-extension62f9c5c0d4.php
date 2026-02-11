<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
define("FOO", "okey");
$date_format = DATE_RFC2822;
var_dump(-9_223_372_036_860_776_000 % -1);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
}
