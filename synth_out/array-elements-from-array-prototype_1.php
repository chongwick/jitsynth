<?php
$test_fl_escaped = escapeshellarg($test_fl);
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$b->dyn = 1;
$phar['x'] = 'hi';
$f = __DIR__."/data/test.txt.gz";
$mysqli->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
$db->query('DROP PROCEDURE IF EXISTS testSp');
var_dump(json_decode('[]', false, 0x100000000));
fclose($stream);
pg_free_result($res);
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
setlocale(LC_ALL, "C");
$this->mysqli->close();
var_dump($namespaceless->lookupNamespaceURI(NULL));
fflush($stream);
var_dump(sprintf("%%%.2f", 1.23456789e10));
$zip->setPassword('bar');
var_dump($temp_array);
$list->add(0, new C);
$root->__construct("malformed");
var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
var_dump(json_decode('{"":"value"}', true));
$test1->test();
set_error_handler('test_error_handler');
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump($e->getMessage());
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
var_dump($phar->getStub());
var_dump($ar1);
var_dump($list->offsetExists($x));
list(
    '' => $foo,
    $bar
) = $array;
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
curl_setopt($ch, CURLOPT_USERPWD, null);
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$priorityQueue->insert("b", 2);
pg_free_result($res);
fwrite($fp, str_repeat("baad", 1024*1024));
var_dump($ar1);
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
printf("printf test 16:%x\n", 170);
var_dump(gzeof($h));
test(3);
var_dump(soundex("Euler")       == soundex("Ellery"));
time_nanosleep(0, 1000000000);
;
var_dump(soundex("Euler")       == soundex("Ellery"));
var_dump(is_callable(array($this, 'parent::testIsCallable')));
var_dump($r["bug69279.txt"]->isCompressed());
$b->aa();
var_dump($dom->lookupNamespaceURI("xml"));
$ai->rewind();
printf("printf test 14:%c\n", 64);
var_dump(asort($temp_array) );
$dom->loadHTML($html);
mysqli_free_result($res);
var_dump($temp_array);
print_r( $r['testvector'] );
var_dump($before === $after);
printf("printf test 22:%016x\n", 170);
$ago = new DateTime('2018-11-03 11:34:20.000000');
$EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
openssl_error_string();
foo();
var_dump(unserialize($s));
$phar->setDefaultStub(str_repeat('a', 400));
$t->cleanRepair();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
var_dump(range(1, 3, -1));
var_dump(json_encode($arr));
foo();
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
$dom->loadXML('<root><child/></root>');
var_dump(str_contains($response, "authorization"));
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
var_dump($row);
var_dump( range(1.0, 7.0, 0.0) );
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
set_exception_handler(function () { print "EX\n"; });
test('Ghost', $obj);
unlink($filename);
curl_exec($ch);
call_user_func("static::ok");
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
$list->add(0, new C);
var_dump(sin($oneeighty));
var_dump ( rtrim("rtrim test        ", true) );
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
zerofill(5, $link, 'INT');
$pdo->exec("insert into t values (0, 'original')");
printf("%s: %s\n", $e::class, $e->getMessage());
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
file_put_contents($tmpFileIn, $originalEnvelopeData);
var_dump(strncasecmp("test ", "E", 10));
var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
fclose($fp);
var_dump(class_exists("TestClass", true));
pg_free_result($res);
var_dump($dom->getElementById('x')?->nodeName);
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
