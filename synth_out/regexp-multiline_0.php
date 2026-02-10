<?php
var_dump(session_cache_limiter());
ob_start("test");
var_dump( get_class($value) );
var_dump($before === $after);
$link->close();
test();
$test1->test();
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
test();
var_dump( end($array_test) );
printf("%0\$s", 1);
$link->real_query($sql);
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
$tester->expectLogNotice($userMessage, 'eeee');
var_dump( range(1.0, 7.0, 6.5) );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$a->test("test");
test('sensitive');
var_dump(strncasecmp("test ", "E", 0));
var_dump( strrchr($haystack, $needle[$index]) );
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
ith_cp($d1, 65001);

touch("$d0\\;
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
var_dump( is_executable($invalid_file) );
test('<?php echo "1";//22');
display([ $stmt2->fetch() ]);
$a->gen();
chdir($oldcwd);
var_dump( end($array_test) );
var_dump($b, $GLOBALS['b'], $c);
print_r($stmt->getColumnMeta(0));
var_dump($obj);
printf( "teststring: %s\n", $r['teststring'] );
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
gc_collect_cycles();
$msgfmt->parse('abc');
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
function f_0() {
    $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
    $cdata = $ffi->new('int16_t');
    $cdata->cdata = $val;
    return $cdata;
};
    byRef(C[0]);
    $count = 1;
    var_dump($r[$ref]);
    $stmt = $pdo->prepare($reqOf3);
    var_dump($diff->invert, $diff->s, $diff->f);
    $array = array("test" => 1);
    var_dump(isset($_POST['foo']));
    $org_b = $GLOBALS['b'];
    var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
    $res = $link->query($sql);
    $reflector->initializeLazyObject($obj);
    $str = "This is a test string.\n";
    var_dump($create);
    $tester = new FPM\Tester($cfg, $code);
    $child->testIsCallable();
}
var_dump(array_search('foo', $result));
var_dump($http_response_header);
printf("[003] Trace file '%s' has not been created\n", $trace_file);
test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
