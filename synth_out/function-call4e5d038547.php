<?php
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
function gen() {
    yield 0;
    yield from gen();
}
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
function bar($gen) {
    yield from $gen;
}
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
class P {
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class C extends P {
    use T;
}
class DB extends mysqli {

    private function __construct($hostname, $username, $password, $database) {
        var_dump("DB::__construct() called");
    }
}
class D {
    public string $prop;
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
function test2() {
    $x = test();
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class derived extends base {
    function show() {
        echo "derived\n";
    }
    function test() {
        echo "test\n";
        $this->show();
        parent::test();
        parent::show();
    }
}
$japanese_so = pack('H4', '835c');
$g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
    '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
    'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
    '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
    'b81747c4c447a941f3';
$iterator = 1;
$array = [0];
function f_0() {
    foo(false, true);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponseHeaders());
    $gen = gen();
    try {
        $unset_var = 10;
        $fp = fopen(__FILE__, "r");
        $heredoc = <<<EOT
        Hello world
        EOT;
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
        
               // array with object, unset variable and resource variable
               array(@$unset_var => "hello", $fp => 'resource'),
        
               // array with mixed keys
        /*11*/ array('hello' => 1, "fruit" => 2.2,
                     $fp => 'resource', 133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
        foreach($arrays as $array) {
          echo "-- Iteration $iterator --\n";
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var) );
        
          // dump the resulting array
          var_dump($temp_array);
        
          /* with optional arguments */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        
          // dump the resulting array
          var_dump($temp_array);
          $iterator++;
        }
        $temp_array = $array;
        var_dump($temp_array);
    } catch (Exception $e) {}
    if (true) {
        $cainfo = array();
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Name         : %s\n", $field->name);
    }
    $tester = new FPM\Tester($cfg);
    $tester->start();
    $tz1 = new DateTimeZone('Europe/Berlin');
    $d = new DateTime('2014-12-24 13:00:00', $tz1);
    try {
        $arg = new Stdclass();
        print_r($arg);
    } catch (Exception $e) {}
    if (true) {
        );
        if (!$reader->open($fil
        ttributeNo(1);
                    echo $reade;
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
        $date2 = new DateTime("Sat 19 November 2011");
        var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    }
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $var = '';
    try {
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        var_dump( end($test_array[1]) );
    } catch (Exception $e) {}
    if (true) {
        $a = new B;
        $array = array('f' => "first", "s" => 'second', 1, 2.222);
        $vars = array (
          '\$ -> This represents the dollar sign. hello dollar!!!',
          '\t\r\v The quick brown fo\fx jumped over the lazy dog',
          'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
          'hello world\\t',
          'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
        );
        foreach($vars as $var) {
          echo "-- Iteration $iterator --\n";
          $temp_array = $array;  // assign $array to another temporary $temp_array
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          var_dump( array_unshift($temp_array, $var) );
        
          // dump the resulting array
          var_dump($temp_array);
        
          /* with optional arguments */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        
          // dump the resulting array
          var_dump($temp_array);
          $iterator++;
        }
        $temp_array = $array;
        var_dump( array_unshift($temp_array, $var) );
    }
    $threesixty = M_PI * 2.0;
    var_dump(sin($threesixty));
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    try {
        ob_end_clean();
    } catch (Exception $e) {}
    if (true) {
        $r = new ReflectionClass('Test2');
        $m = $r->getStaticProperties();
        $m['data3'] = 300;
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $tmp = $stmt->getColumnMeta(0);
        print_r($tmp);
    }
    $host = "localhost\0.example.com";
    var_dump(gethostbyname($host));
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    $assoc_array = array ('one' => 1, 'two' => 2);
    try {
        printf("[%03d] SELECT failed, [%d] %s\n",
                        $offset, mysqli_errno($link), mysqli_error($link));
    } catch (Exception $e) {}
    if (true) {
        $str = "This is a test string.\n";
        var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    }
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    $c = new C();
    try {
        var_dump( $count );
    } catch (Exception $e) {}
    if (true) {
        $DB = new DB();
        printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    }
    var_dump("hello");
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    
    $xmlstring = '<?xml ve;
    try {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
        var_dump($node->textContent);
    } catch (Exception $e) {}
    if (true) {
        $filename = "bug51997.bz2";
        $bz = bzopen($filename, "w");
        $fn = "bug71263.bz2";
        $r = fopen($fn, "r");
        stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    }
    $responses = array(
        "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
        . "Location: /try-again\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "0\r\n\r\n",
        "data://text/plain,HTTP/1.1 200 Ok\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "4\r\n1234\r\n0\r\n\r\n",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    var_dump(file_get_contents($uri));
    $simpleInterval = new DateInterval("P2D");
    try {
        ob_end_clean();
    } catch (Exception $e) {}
    if (true) {
        $d = new D();
        $d->prop = 'foo';
        $im = imagecreate(800, 800);
        $black = imagecolorallocate($im, 0, 0, 0);
        setStyleAndThickness($im, $black, 6);
    }
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
}
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $h = <<<'EOD'
        void (*bug_gh9090_void_none_ptr)();
        void (*bug_gh9090_void_int_char_ptr)(int, char *);
        void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
        void (*bug_gh9090_void_char_int_ptr)(char *, int);
        int (*bug_gh9090_int_int_char_ptr)(int, char *);
        
        void bug_gh9090_void_none();
        void bug_gh9090_void_int_char(int i, char *s);
        void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
        EOD;
        try {
            $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
            var_dump($headers1['Title'][0] === '?');
        } catch (Exception $e) {}
        if (true) {
            $db = PDOTest::factory();
            test2();
        }
        $dom = Dom\HTMLDocument::createEmpty();
        var_dump($dom->lookupNamespaceURI(""));
        $reflector = new ReflectionClass(C::class);
        try {
            $im = imagecreatetruecolor(1, 1);
            imagescale($im, 0, 1, 0);
        } catch (Exception $e) {}
        if (true) {
            );
            if (!$reader->open($fil
            ttributeNo(1);
                        echo $reade;
            mysqli_fetch_field($res);
        }
        var_dump(error_get_last());
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $body = $dom->getElementsByTagName("body")[0];
        $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
        try {
            $db = PDOTest::factory();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {}
        if (true) {
            $bytes = str_repeat("*", 65536);
            $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
            $phar = new Phar($fname);
            $phar->setDefaultStub();
        }
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("HTML"));
        $heredoc_str = <<<EOD
        %
        #$*&
        text & @()
        EOD;
        try {
            $filename = "bug51997.bz2";
            $bz = bzopen($filename, "r");
            fseek($bz, 0, SEEK_CUR);
        } catch (Exception $e) {}
        if (true) {
            $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
            php_cli_server_start('http_response_code(422);');
        }
        $a[10] = "42";
        $i = "010";
        var_dump($a[$i], isset($a[$i]));
    }
}
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $canary = new Canary(null);
        try {
            printf("printf test 25:%-2s\n", "gazonk");
        } catch (Exception $e) {}
        if (true) {
            $cainfo = array();
            var_dump($_POST);
        }
        mysqli_fetch_field($res);
        $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
        try {
            $conn = odbc_connect($dsn, $user, $pass);
            odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
        } catch (Exception $e) {}
        if (true) {
            $o = new C;
            var_dump(-2147483648 % -2);
        }
        phpinfo(INFO_VARIABLES);
    }
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $insert = null;
        try {
            var_dump(json_decode('{"":"value", "key":"value"}', true));
        } catch (Exception $e) {}
        if (true) {
            $host = PHP_CLI_SERVER_HOSTNAME;
            $obj = new C();
            var_dump($obj);
        }
        register_shutdown_function('ABC');
        $canary = new Canary(null);
        $iterable = f($canary);
        $fiber = $iterable = $canary = null;
        try {
            $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
            $xml = simplexml_load_string($xmlString);
            $nodes = $xml->a->b;
            test($nodes, "asXml", fn ($n) => $n->asXml());
        } catch (Exception $e) {}
        if (true) {
            $pid = pcntl_fork();
            $dt = new DateTime('@1604215800');
            $dt->add(new DateInterval('PT1M'));
        }
        grapheme_stripos(1,1,2147483648);
    }
}
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
$t = new derived();
$t->test();
