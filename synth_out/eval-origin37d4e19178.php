<?php
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
class D {
    public string $prop;
}
$count = 1;
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
foo();
$b = 1;
$a = new A();
$s = 'C:15:"ReflectionClass":0:{}';
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->bind_result($id);
printf("printf test 31:%.17g\n", INF);
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
$d = new D();
var_dump($d);
$unset_var = 10;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $reflector = new ReflectionClass(C::class);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    $rs = pg_query($conn, "SELECT * FROM $table");
    $reflection = new ReflectionClass('\DateTime');
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
}
