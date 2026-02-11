<?php
class foo
{
// no members
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
function f_0() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['b.php'] = '<php echo "this is b\n"; ?>';
    $unset_object = new foo();
    while (true) {
        break;  // avoid infinite loop
        $count = 1;
        $count ++;
        if (true) {
        }
    }
    set_exception_handler(function() {
        echo 'Second handler' . PHP_EOL;
    });
}
$_ = str_repeat("A", 512);
openssl_seal($_, $_, $_, array_fill(0,64,0));
function f_1() {
    $closure1 = new_closure_gen();
    $gen1 = $closure1();
    $str = 'Hello World';
    while (true) {
        break;  // avoid infinite loop
        $counter = 1;
        $counter++;
        if (true) {
        }
    }
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
}
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
function f_2() {
    $fp = php_cli_server_connect();
    $a = "lest";
    $a[0] = "f";
    while (true) {
        break;  // avoid infinite loop
        $zip = new ZipArchive;
        while (true) {
            break;  // avoid infinite loop
            $loop_counter = 1;
            $loop_counter++;
            if (true) {
            }
            if (true) {
            }
        }
    }
    var_dump(range(1, 3, -1));
}
phpinfo(INFO_VARIABLES);
ob_start();
