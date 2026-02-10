<?php
class foo extends SplFixedArray {
    public function __construct($size) {
    }
}
$x = new foo(2);
$dtor = new class { function __destruct() { throw new Exception; } };
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dir = opendir('foo://bar');
    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
}
$trace_file = '/tmp/mysqli_debug_phpt.trace';
