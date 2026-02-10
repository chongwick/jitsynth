<?php
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$b = bar($gen);
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
$list2 = clone $list;
$assoc_array = array ('one' => 1, 'two' => 2);
class foo
{
// no members
}
$this->protected_var = new foo();
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
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    class PHPUnit_Framework_MockObject_Stub_ReturnCallback {
        protected $callback;
        public function __construct($callback) {
            $this->callback = $callback;
        }
        public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    }
    class PHPUnit_Framework_MockObject_Matcher {
        public $stub = null;
        public $methodNameMatcher;
        public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    }
    class MethodCallbackByReference {
        public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
        public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    }
    class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
        public $inv_mocker;
        public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    }
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $OuterMatcher->stub = new PHPUnit_Framework_MockObject_Stub_ReturnCallback([$foo, 'callback']);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $utfl = __DIR__ . "/sni_server_uk.pem";
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $zip = new ZipArchive();
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
        $data = ["k" => 0, 1, 2, 3];
        $cow_copy = $data;
        $GLOBALS['b'] = 2;
        $b = &$GLOBALS['b'];
        $c = $b;
        class FooBar implements ArrayAccess {
            private $array = array();
        
            public function offsetExists($index): bool {
                return isset($this->array[$index]);
            }
        
            public function offsetGet($index): mixed {
                return $this->array[$index];
            }
        
            public function offsetSet($index, $value): void {
                echo __METHOD__ . "($index, $value)\n";
                $this->array[$index] = $value;
            }
        
            public function offsetUnset($index): void {
                throw new Exception('FAIL');
                unset($this->array[$index]);
            }
        
        }
        $i = 0;
        $j = 0;
        $foo = new FooBar();
        $foo[$j++] = $i++;
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d0 = $prefix . "ソフト";
        $d1 =
        est0.txt");
        unlink("$d1\\;
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
        $date2 = new DateTime("Sat 19 November 2011");
        var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
        var_dump(spl_autoload_functions());
        md5('foo');
        function PostEvents($x) {
            var_dump($x);
            exit();
          return $x;
        }
        var_dump($x);
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
        $tester = new FPM\Tester($cfg);
        $tester->close();
        printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
        #[\AllowDynamicProperties]
        class C {
            public $b;
            public function __construct() {
                $this->a = new Canary();
            }
        }
        $obj = new C();
        var_dump($obj);
        $ar1 = array("row1" => 2, "row2" => 1);
        $args = array($ar1);
        var_dump(call_user_func_array("array_multisort", $args));
        printf("printf test 20:%16X\n", 170);
        var_dump( range(7.0, 1.0, 6.5) );
        if (true) {
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElement($dom, "HTML", "1"));
            $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
            $stmt = $mysql->prepare("SELECT id FROM temp");
            $stmt->execute();
        }
    }
    if (true) {
        $s = new SplObjectStorage();
        $s->attach($s);
        $a = new PDO("sqlite::memory:");
        $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
    }
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
    zerofill(4, $link, 'MEDIUMINT');
    if (true) {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->setDefaultStub(str_repeat('a', 400));
    }
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    class foo
    {
    // no members
    }
    $this->private_var = new foo();
    $from = "%#$*&@()";
    $im = imagecreate(800, 800);
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    error_reporting(E_ALL);
    phpinfo(INFO_VARIABLES);
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
    var_dump($namespaceless->lookupNamespaceURI(""));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    $various_arrays = array (
      array(5 => 55,  66, 22, 33, 11),
      array ("a" => "orange",  "banana", "c" => "apple"),
      array(1, 2, 3, 4, 5, 6),
      array("first", 5 => "second", "third"),
      array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
      array('bar' => 'baz', "foo" => 1),
      array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
    );
    foreach ($various_arrays as $array) {
      echo "\n-- Iteration $count --\n";
    
      echo "- With default sort_flag -\n";
      $temp_array = $array;
      var_dump(asort($temp_array) );
      var_dump($temp_array);
    
      echo "- Sort_flag = SORT_REGULAR -\n";
      $temp_array = $array;
      var_dump(asort($temp_array, SORT_REGULAR) );
      var_dump($temp_array);
      $count++;
    }
    $temp_array = $array;
    var_dump(asort($temp_array) );
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    var_dump(c1::$a2);
    print_r($str_instead);
    printf("printf test 10: 123456789012345\n");
    $pdo = MySQLPDOTest::factory();
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $doc = new \DOMDocument();
    $date2 = new DateTime("Sat 19 November 2011");
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
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
    var_dump($body->lookupNamespaceURI(NULL));
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump(count($cert_data['extracerts']));
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    #[AllowDynamicProperties]
    class C {
        public $a = 1;
    }
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $counter = 1;
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( strftime($value) );
          var_dump( strftime($value, $timestamp) );
    }
    var_dump( strftime($value, $timestamp) );
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
    $style = array();
    imagesetstyle($im, $style);
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $baz = (float)$foo;
    var_dump($baz);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    var_dump(odbc_result($res, 'whatever'));
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    test(1);
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
    $dbh = @pg_connect($conn_str);
    pg_close($dbh);
    sprintf('%$s, %2$s %1$s', "a", "b");
    function test(array... $args) {
        var_dump($args);
    }
    test();
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 2, 'value' => 10));
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $dom = Dom\HTMLDocument::createEmpty();
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $time = '2000-01-01 00:00:00.000000';
        $tz_aus = new DateTimeZone('Australia/Sydney');
        $tz_us = new DateTimeZone('America/Los_Angeles');
        $auz = new DateTime($time, $tz_aus);
        $us = new DateTime($time, $tz_us);
        $diff = $auz->diff($us);
        class foo
        {
        // no members
        }
        $unset_object = new foo();
        $tbl = "test";
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $y = 0;
            $timestamp = "2005-11-08T11:22:07+03:00";
            function __construct($audienceMemberId, $timestamp, $smokeStatus) {
                $this->audienceMemberId = $audienceMemberId;
                $this->timestamp = $timestamp;
                $this->smokeStatus = $smokeStatus;
                $this->callInitiator = "IVR";
              }
            $this->audienceMemberId = $audienceMemberId;
            $i = 0;
            class C {
                public function __toString() {
                    global $c;
                    $c = [];
                    throw new Exception(__METHOD__);
                }
            }
            $c = new C();
            $dom = new DOMDocument;
            $element = $dom->appendChild($dom->createElement('root'));
            $element->prepend('x', new DOMEntity);
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            var_dump(gzeof($h));
            printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
                        $host, $user, $db, $port, $socket);
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
            $plain = "The quick brown fox jumps over the lazy dog.";
            $fn = "bug71263.bz2";
            $compressed = (string) bzcompress($plain);
            $compressed = substr($compressed, 0, strlen($compressed) - 20);
            file_put_contents($fn, $compressed);
        }
    }
}
