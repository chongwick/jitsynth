<?php
byVal(C[0]);
function byVal($arg) {
    var_dump($arg);
};
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
$closure1 = new_closure_gen();
$values = ini_get_all();
foreach ($values as $name => $dsn)
        if ('pdo.dsn.mysql' == $name) {
            printf("pdo.dsn.mysql=%s\n", $dsn);
            $found = true;
            break;
        }
printf("pdo.dsn.mysql=%s\n", $dsn);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    var_dump($obj);
}
