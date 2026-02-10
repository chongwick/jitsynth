<?php
$fp = fopen("php://memory", "r+");
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
