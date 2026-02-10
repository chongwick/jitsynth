<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
$canary = new Canary(null);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Flags        : %d\n", $field->flags);
spl_autoload_register();
var_dump('ERR');
$dest = __DIR__ . "/bug40228";
$zip = new ZipArchive;
$zip->extractTo($dest);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
function foo() {
    $x = 1;
    $x += 0;
    ++$x; // mem -> reg
    return $x;
}
var_dump(foo());
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
function foo() {
  var_dump($i=1);
  return $i;
}
var_dump(foo());
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
try {
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
} catch (Exception $e) {}
if (true) {
}
debug_print_backtrace();
