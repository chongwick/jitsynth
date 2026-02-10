<?php
function f_0() {
    return $g;
}
function f_1() {
    $arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with unset variable
/*10*/ array( @$unset_var => "hello"),

       // array with mixed keys
/*11*/ array('hello' => 1,  "fruit" => 2.2,
             133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
        $blank_line = <<<EOT

EOT;
        $tester = new FPM\Tester($cfg, $code);
        $args[] = "-c";
        $dir = opendir('foo://bar');
        $stmt1 = $pdo->query($reqOf3);
        $conn = pg_connect($conn_str);
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $dest = __DIR__ . "/bug40228";
        $a = 1;
        $reflector = new ReflectionClass(C::class);
        $xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
        $result = get_declared_classes();
        $fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
        $fp = php_cli_server_connect();
        $lazy = true;
        $k = 2 * $i;
        $m['data1'] = 100;
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $pdo = new \PDO($dsn, null, null);
        $_a = $a;
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $values =  array (
  //Decimal values
  0,
  1,
  12345,
  -12345,

  //Octal values
  02,
  010,
  030071,
  -030071,

  //Hexadecimal values
  0x0,
  0x1,
  0xABCD,
  -0xABCD
);
        $this->activityId = $activityId;
        $t = new stdClass;
        $host = "localhost\0.example.com";
        $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
        $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
        $cfg['main'] = <<<EOT
[global]
error_log = {{FILE:LOG}}
log_level = notice
include = {{INCLUDE:CONF}}
EOT;
        $name = "foo";
        $ok = true;
        $t = tidy_parse_string($input);
        $addr = '::1';
        $a = new PDO("sqlite::memory:");
        $a[10] = "42";
        $fp = fopen('php://input', 'r+');
        $m['data1'] = 100;
        $g = 1;
        $oneeighty = M_PI;
        $data = array_unique($data, flags: SORT_REGULAR);
        $s = 'O:15:"ReflectionClass":0:{}';
        $a = &$value->a;
        $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
        $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
        $res = [];
        $heredoc_null_string =<<<EOT
EOT;
        $obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
        $count = 1;
        $h = gzopen($f, 'r');
        $x = test();
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $this->version = $version;
        $ar = array_values($array);
        $code = null;
        $attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $dt = new DateTime('@1604215800');
        $args = array(&$ar1);
        $d->prop = $c;
        $create = 'CREATE TABLE test(id INT, ';
        $res[] = $re;
        $t = tidy_parse_string($input);
        $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
        $field = $meta_res->fetch_field();
        $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $arr = [$class];
        $foo_object = new foo();
        $foo = new Foo();
        $w["bug69279.txt"] = "Sample content.";
        $row = $res->fetch_array();
    }
    return 'B';
}
function f_3() {
    return $i;
}
function f_4() {
    return $arg;
}
function f_5() {
    return true;
}
function f_6() {
    return get_class($object);
}
function f_7() {
    return ++$x;
}
function f_8() {
    $logOnEvent = new LogOnEvent(34567, $timestamp);
    $response = ob_get_contents();
    return "Class A object";
}
function f_9() {
    return true;
}
function f_10() {
    $fixedArray = new SplFixedArray(1);
    $context = stream_context_create($arr);
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $initialRequest = true;
    }
    return 'printer';
}
function f_12() {
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $foo[$j++] = $i++;
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $b = new B();
    }
    return true;
}
$code = null;
for ($i_14 = 0; $i_14 < 10; $i_14++) {
    $varOutput = ob_get_contents();
}
var_dump($dom->getElementById('x')?->nodeName);
krsort($flags);
