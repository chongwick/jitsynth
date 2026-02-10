<?php
date_default_timezone_set('UTC');
var_dump($_SESSION);
$s = 'O:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
function test(#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}
test('sensitive');
printf("printf test 8:<%20s>\n", "foo");
