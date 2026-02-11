<?php
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
class C extends stdClass {
    public int $a;
}
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
function test(array... $args) {
    var_dump($args);
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
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
class DB extends mysqli {

    private function __construct($hostname, $username, $password, $database) {
        var_dump("DB::__construct() called");
    }
}
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
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
function foo() {
  var_dump("hello");
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
class A {
    public $a;
}
abstract class abstractClass
{
  abstract protected function getClassName();
  public function printClassName () {
    echo $this->getClassName() . "\n";
  }
}
class concreteClass extends abstractClass
{
  protected function getClassName() {
    return "concreteClass";
  }
}
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
class D {
    public string $prop;
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
function gen() { yield; }
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
function f_0() {
    $response = ob_get_contents();
    return $response;
}
function f_1() {
    return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
}
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
$closure2 = new_closure_gen();
$gen3 = $closure2();
$dom = Dom\HTMLDocument::createEmpty();
function f_2() {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    mt_srand(1234567890);
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    fclose($fp);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "html", "3"));
    printf("printf test 7:%010.2f\n", 2.5);
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    $db = MySQLPDOTest::factory();
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
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
    rmdir($prefix . $d);
    }
    rmdir($prefix);
    
    ?>
    ($prefix);
    
    ?>;
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        });
    catch (PDOException $e) {
        var_dump($e->getCode());
    }
    var_dump($e->getCode());
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $child = new ChildClass();
    $child->testIsCallable();
    var_dump(-2147483648 % -2);
    var_dump(0);
    set_include_path(__DIR__.'/bug39542:.');
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("a", 1);
    $arr = array(
        range(1, 5),
        range(1, 5),
        range(1, 5),
        range(1, 5),
        range(1, 5),
    );
    array_walk_recursive($arr,
        function (&$value, $key) use(&$arr) {
            var_dump($key);
            unset($arr[$key]);
        }
    );
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    test([0], [1], 2);
    spl_autoload_register(function($class) {
        echo "$class\n";
        if ($class == 'X') {
            new Y;
        }
        if ($class == 'Y') {
            new Q;
        }
    });
    ob_clean();
    $obj = new C();
    var_dump($obj);
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
    foreach ($flags as $code => $name) {
                if ($reported_flags >= $code) {
                    $reported_flags -= $code;
                    $found_flags .= $name . ' ';
                    if (stristr($expected_flags, $name)) {
                        $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                    } else {
                        $unexpected_flags .= $name . ' ';
                    }
                }
            }
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
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
    printf("printf test 20:%16X\n", 170);
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
    var_dump( end($sub_array) );
    var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    dir($d1);
    
    ;
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
    $canary = new Canary(null);
    $iterable = f($canary);
    $iterable->current();
    catch (\PDOException $e) {
      var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    test(3);
}
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
$headers = ['Host: okey.com'];
$httpContext = [
    'http' => [
        'protocol_version'	=> '1.1',
        'method'			=> 'GET',
        'header'			=> &$headers,
        'follow_location'	=> 0,
        'max_redirects'		=> 0,
        'ignore_errors'		=> true,
        'timeout'			=> 60,
    ],
];
$context = stream_context_create($httpContext);
print_r(stream_context_get_options($context));
$needle = base64_decode('44CC');
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $array = [
        [
        'superhero'=> 'superman',
        'nanana' => 'no nana'
        ],
        [
        'superhero'=> 'acuaman',
        'nanana' => 'no nana'
        ],
    
        ];
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
}
$DB = new DB();
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $references = array();
    debug_zval_dump($references);
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
}
$x = new X;
$x->prop = 1;
function f_5() {
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    var_dump(json_decode('"\ud834"'));
    var_dump(0);
    register_shutdown_function('exploDe');
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    var_dump(soundex("Hilbert"));
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $ch = curl_init();
    curl_exec($ch);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    $a = new Test();
    var_dump($a->value);
    test([0], [1], 2);
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $dom->documentElement->appendChild($test1);
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
    var_dump(soundex("Knuth"));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->close();
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
    $fd = fopen('php://memory','w');
    fwrite($fd, "foo");
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 6);
    stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
}
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    foo();
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->query("DROP TABLE temp");
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 2);
}
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
function f_7() {
    $iterator = 1;
    $ch = curl_init("https://localhost/username");
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $a = new A();
    try {
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            if (true) {
                $arr = array(
                0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
                0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
                0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
                0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
                0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
                0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
                0x2020 => array(0x86, "DAGGER"),
                0x2021 => array(0x87, "DOUBLE DAGGER"),
                0x20AC => array(0x88, "EURO SIGN"),
                0x2030 => array(0x89, "PER MILLE SIGN"),
                0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
                0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
                0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
                0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
                0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
                0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
                0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
                0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
                0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
                0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
                0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
                0x2022 => array(0x95, "BULLET"),
                0x2013 => array(0x96, "EN DASH"),
                0x2014 => array(0x97, "EM DASH"),
                //0x98	      	#UNDEFINED
                0x2122 => array(0x99, "TRADE MARK SIGN"),
                0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
                0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
                0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
                0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
                0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
                0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
                0x00A0 => array(0xA0, "NO-BREAK SPACE"),
                0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
                0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
                0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
                0x00A4 => array(0xA4, "CURRENCY SIGN"),
                0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
                0x00A6 => array(0xA6, "BROKEN BAR"),
                0x00A7 => array(0xA7, "SECTION SIGN"),
                0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
                0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
                0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
                0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
                0x00AC => array(0xAC, "NOT SIGN"),
                0x00AD => array(0xAD, "SOFT HYPHEN"),
                0x00AE => array(0xAE, "REGISTERED SIGN"),
                0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
                0x00B0 => array(0xB0, "DEGREE SIGN"),
                0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
                0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
                0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
                0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
                0x00B5 => array(0xB5, "MICRO SIGN"),
                0x00B6 => array(0xB6, "PILCROW SIGN"),
                0x00B7 => array(0xB7, "MIDDLE DOT"),
                0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
                0x2116 => array(0xB9, "NUMERO SIGN"),
                0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
                0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
                0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
                0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
                0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
                0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
                0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
                0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
                0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
                0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
                0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
                0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
                0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
                0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
                0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
                0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
                0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
                0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
                0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
                0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
                0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
                0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
                0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
                0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
                0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
                0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
                0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
                0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
                0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
                0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
                0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
                0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
                0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
                0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
                0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
                0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
                0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
                0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
                0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
                0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
                0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
                0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
                0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
                0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
                0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
                0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
                0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
                0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
                0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
                0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
                0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
                0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
                0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
                0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
                0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
                0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
                0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
                0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
                0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
                0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
                0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
                0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
                0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
                0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
                0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
                0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
                0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
                0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
                0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
                0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
                );
                foreach ($arr as $u => $v) {
                    $ent = sprintf("&#x%X;", $u);
                    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
                    $d = unpack("H*", $res);
                    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);
                
                    $ent = sprintf("&#x%X;", $v[0]);
                    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
                    if ($res[0] != "&" || $res[1] != "#")
                        $res = unpack("H*", $res)[1];
                    echo sprintf("%s => %s\n\n", $ent, $res);
                }
                $ent = sprintf("&#x%X;", $u);
            }
            $argv = array(1, 2, 3);
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $ar1 = array("row1" => 2, "row2" => 1);
    }
    if (true) {
        $time = '2000-01-01 00:00:00.000000';
        $tz_aus = new DateTimeZone('Australia/Sydney');
        $tz_us = new DateTimeZone('America/Los_Angeles');
        $auz = new DateTime($time, $tz_aus);
        $us = new DateTime($time, $tz_us);
        $diff = $auz->diff($us);
    }
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    fclose($input);
}
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
foreach ([false, true] as $emulate) {
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);

    try {
        $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
        $stmt->execute();
    } catch (PDOException $e) {
        var_dump('ERR');
    }

    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();

    var_dump($stmt->fetch());
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
function f_9() {
    $response = ob_get_contents();
    $b = 'ok';
    $_b = $b;
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $foo = new Foo;
    $bar = (int)$foo;
    try {
        for ($i_10 = 0; $i_10 < 10; $i_10++) {
            if (true) {
                $response = ob_get_contents();
            }
            $concreteClass_object = new concreteClass();
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $halves[0] = $halves[1] = 0;
    }
    if (true) {
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
    }
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
}
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
foreach ($compression as $ext => [$filter, $function]) {
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    fwrite($stream,"sdfgdfg");
    fflush($stream);
    fclose($stream);

    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
}
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
fflush($stream);
$db = PDOTest::factory();
$res = $db->query("SELECT a FROM test36428");
function f_11() {
    $s = new SplObjectStorage();
    $from = "%#$*&@()";
    $loop_counter = 1;
    $regex = '/[a-z]/';
    try {
        for ($i_12 = 0; $i_12 < 10; $i_12++) {
            if (true) {
                $test1 = new B1;
            }
            $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
            $i = 0;
            $i++;
        }
    } catch (Exception $e) {}
    if (true) {
        $header = <<<HEADER
        enum bug_gh16013_enum {
        	BUG_GH16013_A = 1,
        	BUG_GH16013_B = 2,
        };
        struct bug_gh16013_int_struct {
        	int field;
        };
        struct bug_gh16013_callback_struct {
        	int8_t (*return_int8)(int8_t);
        	uint8_t (*return_uint8)(uint8_t);
        	int16_t (*return_int16)(int16_t);
        	uint16_t (*return_uint16)(uint16_t);
        	int32_t (*return_int32)(int32_t);
        	uint32_t (*return_uint32)(uint32_t);
        	float (*return_float)(float);
        	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
        	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
        };
        
        char bug_gh16013_return_char();
        bool bug_gh16013_return_bool();
        short bug_gh16013_return_short();
        int bug_gh16013_return_int();
        enum bug_gh16013_enum bug_gh16013_return_enum();
        struct bug_gh16013_int_struct bug_gh16013_return_struct();
        HEADER;
        $ffi = FFI::cdef($header, 'php_zend_test.dll');
    }
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
}
$d = new D();
var_dump($d);
function f_13() {
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
    $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
    $gen = gen();
    try {
        for ($i_14 = 0; $i_14 < 10; $i_14++) {
            if (true) {
                $halves[0] = $halves[1] = 0;
                $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
                $halves[0] = $halves[1] = 0;
            }
            $inputs = array(
                  // Predefined Date constants
                  'DATE_ATOM Constant' => DATE_ATOM,
                  'DATE_COOKIE Constant' => DATE_COOKIE,
                  'DATE_RFC822 Constant' => DATE_RFC822,
                  'DATE_RFC850 Constant' => DATE_RFC850,
                  'DATE_RFC1036 Constant' => DATE_RFC1036,
                  'DATE_RFC1123 Constant' => DATE_RFC1123,
                  'DATE_RFC2822 Constant' => DATE_RFC2822,
                  'DATE_RFC3339 Constant' => DATE_RFC3339,
                  'DATE_RSS Constant' => DATE_RSS,
                  'DATE_W3C Constant' => DATE_W3C,
            );
            $count = 1;
            $count ++;
        }
    } catch (Exception $e) {}
    if (true) {
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    }
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
    mysqli_close($link);
    register_shutdown_function('timE');
}
bar('first try');
function f_15() {
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $unset_var = 10;
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            $dbh = @pg_connect($conn_str);
            $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
            $a = $b = $c = 2;
        }
        $list = new SplDoublyLinkedList;
    }
    does_not_work();
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
    ++$testCasesTotal;
}
global $list;
$list->pop();
function f_17() {
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = php_ini_loaded_file();
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            $x = new X;
            $a = 1;
        }
        $xml =<<<EOF
        <xml>
        <fieldset1>
        </fieldset1>
        <fieldset2>
        <options>
        </options>
        </fieldset2>
        </xml>
        EOF;
        $sxe = new SimpleXMLIterator($xml);
        $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($rit as $child) {
            $ancestry = $child->xpath('ancestor-or-self::*');
            // Exhaust internal iterator
            foreach ($ancestry as $ancestor) {
            }
        }
        $ancestry = $child->xpath('ancestor-or-self::*');
    }
    $db = PDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();
    ++$testCasesTotal;
}
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";
  // with default argument
  echo "- with default argument -\n";
  var_dump( array_reverse($array) );
  // with all possible arguments
  echo "- with \$preserve keys = true -\n";
  var_dump( array_reverse($array, true) );
  echo "- with \$preserve_keys = false -\n";
  var_dump( array_reverse($array, false) );
  $iterator++;
}
var_dump( array_reverse($array, false) );
