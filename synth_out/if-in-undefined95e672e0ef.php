<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://php.net\\@aliyun.com/aaa.do");
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->rewind();
