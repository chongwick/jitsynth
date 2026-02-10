<?php
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$bytes = str_repeat("*", 65536);
$output = deflate_add(
        $deflator,
        $bytes,
        ZLIB_SYNC_FLUSH
    );
function f_0() {
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$mysqli->query($sql);
class A {
    public $a;
}
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
var_dump($prop->getRawValue($a));
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 5));
$offset = 'teststring';
$assoc_array = array ('one' => 1, 'two' => 2);
function f_1() {
    return new stdClass();
}
printf("[005] [%d] %s\n", $link->errno, $link->error);
$zip = new ZipArchive();
$zip->close();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
