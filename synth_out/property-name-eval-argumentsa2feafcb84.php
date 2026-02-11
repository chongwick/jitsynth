<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$attr = $root->attributes('urn:x');
var_dump(dom_import_simplexml($attr)->textContent);
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
