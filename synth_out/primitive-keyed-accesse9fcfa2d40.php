<?php
class foo extends SplFixedArray {
    public function __construct($size) {
    }
}
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
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
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$thirty = M_PI / 6.0;
$dsn = ini_get('pdo.dsn.mysql');
$x = new foo(2);
$pdo = MySQLPDOTest::factory();
var_dump(json_last_error() === JSON_ERROR_UTF16);
$references = array();
$idx = 0;
$references[$idx++]['id_copy']	= $row['id'];
for ($i = 0; $i < 5; $i++) {
    $v[$i] = 'hi'.$i;
}
$v[$i] = 'hi'.$i;
gc_collect_cycles();
foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
$item['nanana'] = 'batman';
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
touch("$d0\\test0.txt");
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
fclose($f);
mt_srand(1234567890);
$_ = str_repeat("A", 512);
openssl_seal($_, $_, $_, array_fill(0,64,0));
var_dump(strncmp("test ", "e", 10));
$arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
foreach ($arrays as $sub_array){
  echo "-- Iteration $counter --\n";
  var_dump( end($sub_array) );
  /* ensure that internal pointer is moved to last element */
  var_dump( current($sub_array) );
  $counter++;
}
var_dump( current($sub_array) );
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
