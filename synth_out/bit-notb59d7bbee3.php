<?php
function f_0() {
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $pass	= PDO_MYSQL_TEST_PASS;
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    $unset_var = 10;
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test@[::1]");
}
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->close();
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->expectLogStartNotices();
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} finally {
		print "handle first\n";
		return "ok";
	}
})();
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$readonly_anon->field = 123;
var_dump($readonly_anon->field);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
var_dump(A::$x);
var_dump(pack('x') === "\0");
$references = array();
debug_zval_dump($references);
$fd = fopen('php://memory','w');
fwrite($fd, "foo");
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
ob_end_clean();
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$arr = array('a', 'b');
$arr();
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
undefined_function('Null');
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t select n + 1, 'non '||t from t");
byRef(C[0]);
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
};
