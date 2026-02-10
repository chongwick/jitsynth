<?php
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
$loop_counter = 1;
$fp = fopen("php://memory", "r+");
$unixtime = strtotime($date);
$initialRequest = false;
foo(false, false);
var_dump(strlen($phar->getStub()));
$data = array_unique($data, flags: SORT_REGULAR);
$reflector->getMethod('test')->invoke($obj, $obj);
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
var_dump($bar);
var_dump(openssl_pkcs7_verify($eml, 0));
$iterable = f($canary);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
$foo = new Foo();
var_dump($a->value);
(new B)->baz();
$fp = fopen(__FILE__, "r");
var_dump(version_compare('1.2', '2.1', '??'));
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
$ent = sprintf("&#x%X;", $v[0]);
$DB = new DB();
$ao = new ArrayObject(new C);
$tester->terminate();
fclose($this->stream);
$this->foo_object = new foo();
$magic_file = __DIR__ . '/bug79283.db';
$reader = XMLReader::fromUri($filename);
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
$item['nanana'] = 'batman';
$c->prop2 = 'hello world';
$fp = fopen(__FILE__, "r");
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
fclose($fp);
$response = curl_exec($ch);
bar();
http_server_kill($pid);
$assoc_array = array ('one' => 1, 'two' => 2);
$fiber->start();
debug_zval_dump($test);
$a=glob("./*.jpeg");
ini_set('mysqlnd.fetch_data_copy', true);
var_dump($anon->field);
$gen2 = $closure1();
var_dump(c1::$a1);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
lor(10,100);
imagefill($im1, 0,0, 0x;
var_dump("hello");
var_dump(unserialize($s));
$references[$idx]['id_ref'] 		= &$rows[$i]['id'];
$link->real_query($sql);
printf( "teststring: %s\n", $r['teststring'] );
$response = array(
    'a' => 'b'
);
var_dump( range(1.0, 7.0, 0.0) );
var_dump(openssl_pkcs7_verify($eml, 0));
$haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
var_dump(gzread($h, 8));
$iterator = 1;
$b->execute(array (5));
var_dump(session_cache_expire());
$expected_flags = trim(str_ireplace($name, '', $expected_flags));
var_dump($argv);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$name = "foo";
fwrite($fp, str_repeat("baad", 1024*1024));
$this->server->addFunction('PostEvents');
$d = new D();
var_dump($namespaceless->lookupNamespaceURI("a"));
gzclose($h);
$field = mysqli_fetch_field_direct($res, 1);
var_dump($child);
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$headers = ['Host: okey.com'];
pg_close($dbh);
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
$list = [];
php_cli_server_start($code, null, $args);
var_dump( end($resources) );
$a->prop = '';
$fiber = new Fiber(function() use ($gen) {
    $gen->current();
});
$mutable = $reflection->newInstanceWithoutConstructor();
var_dump(file_get_contents($pkcsfile));
zerofill(6, $link, 'INTEGER');
$db = MySQLPDOTest::factory();
print_r($str_instead);
session_decode($data);
$ftp = ftp_connect('127.0.0.1', $port);
unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
$a = new A();
define ('foobar', 1);
;
$s1 = "some string";
php_cli_server_start('foo bar');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$a[$i] = Array(1);
var_dump($obj);
foo();
$field = $meta_res->fetch_field();
display($res);
ini_set("soap.wsdl_cache_enabled",0);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
mysqli_fetch_field($res);
$to = $users[0];
restore_exception_handler();
fclose($fp);
function f_0() {
    $diff = $ago->diff($now, true);
    $stmt->execute();
    var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
    $a = new DateTime("2009-01-01", null);
    $tester->expectLogTerminatingNotices();
    $ar1 = array(1, 2);
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    fclose($r);
    ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file;
    fclose($fp);
    $b->execute(array (5));
    $fn = function() { return static::name(); };
    imagescale($im, 0, 1, 0);
    php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
    $conn = odbc_connect($dsn, $user, $pass);
    var_dump(range(1, 3, -1));
    var_dump($temp_array);
    $loop_counter = 1;
    odbc_fetch_row($res);
    $zip->close();
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    var_dump($d);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
var_dump($e->getMessage());
