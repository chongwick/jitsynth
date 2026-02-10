<?php
$index_array = array (1, 2, 3);
var_dump(-2147483648 % -1);
$dir = opendir('foo://bar');
closedir($dir);
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
$a->rewind();
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
$t = new base();
class C {
    public int $a;
}
$obj = new C();
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
