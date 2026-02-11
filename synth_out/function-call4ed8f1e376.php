<?php
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
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
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
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function genResponses($server) {
    $uri = 'http://' . stream_socket_get_name($server, false);
    yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
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
    // Missing content-type in actual response.
    yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
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
class C {
    public int $a;
}
class foo
{
// no members
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
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
class myClass
{
  var       $foo_object;
  public    $public_var;
  public    $public_var1;
  private   $private_var;
  protected $protected_var;

  function __construct ( ) {
    $this->foo_object = new foo();
    $this->public_var = 10;
    $this->public_var1 = new foo();
    $this->private_var = new foo();
    $this->protected_var = new foo();
  }
}
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$loop_counter = 1;
$blank_line = <<<EOD

EOD;
$counter = 1;
function f_0() {
    printf("printf test 22:%016x\n", 170);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $reader->close();
    $empty = "";
    try {
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
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmdate($value, $timestamp) );
              var_dump( gmdate($value) );
        }
        var_dump( gmdate($value) );
    } catch (Exception $e) {}
    if (true) {
        $table='test_68638';
        $cert = "file://" . __DIR__ . "/cert.crt";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    }
    mysqli_free_result($res);
    $arr = array('http'=>
                            array(
                                    'follow_location'=>1,
                            )
                    );
    try {
        $priorityQueue = new SplPriorityQueue();
        $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    } catch (Exception $e) {}
    if (true) {
        $db = MySQLPDOTest::factory();
        $fp = fopen('php://input', 'r+');
        var_dump(fseek($fp, -32, SEEK_CUR));
    }
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    $t = new derived();
    try {
        $cl = new bug8318;
        $cl->fpassthru();
    } catch (Exception $e) {}
    if (true) {
        $GLOBALS['b'] = 2;
        $org_a = $GLOBALS['a'];
        var_dump(soundex("Knuth"));
    }
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $id = odbc_result($res, "ID");
    try {
        $str = "repeater id='loopt' dataSrc=subject columns=2";
        preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    } catch (Exception $e) {}
    if (true) {
        $y = 0;
        $db = PDOTest::factory();
        $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
        $insert->execute();
    }
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileIn);
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 10));
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    try {
        restore_exception_handler();
    } catch (Exception $e) {}
    if (true) {
        $userMessage = "'user' directive is ignored when FPM is not running as root";
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
        var_dump($namespaceless->lookupNamespaceURI(NULL));
    }
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
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    try {
        $func_ptrs = [
            'bug_gh9090_void_none_ptr',
            'bug_gh9090_void_int_char_ptr',
            'bug_gh9090_void_int_char_var_ptr',
            'bug_gh9090_void_char_int_ptr',
            'bug_gh9090_int_int_char_ptr',
        ];
        $func_argvs = [
            [ 'bug_gh9090_void_none',         [ ]                           ],
            [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
            [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
        ];
        foreach ($func_ptrs as $func_ptr) {
            foreach ($func_argvs as $func_argv) {
                [ $func, $argv ] = $func_argv;
        
                $ok = true;
                try {
                    $ffi->$func_ptr = $ffi->$func;
                    call_user_func_array($ffi->$func_ptr, $argv);
                } catch (FFI\Exception $e) {
                    $ok = false;
                }
        
                printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
            }
        }
        foreach ($func_argvs as $func_argv) {
                [ $func, $argv ] = $func_argv;
        
                $ok = true;
                try {
                    $ffi->$func_ptr = $ffi->$func;
                    call_user_func_array($ffi->$func_ptr, $argv);
                } catch (FFI\Exception $e) {
                    $ok = false;
                }
        
                printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
            }
        [ $func, $argv ] = $func_argv;
        $ok = false;
        printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    } catch (Exception $e) {}
    if (true) {
        $before = memory_get_usage();
        spl_autoload_register(function($class) {
            echo "$class\n";
            if ($class == 'X') {
                new Y;
            }
            if ($class == 'Y') {
                new Q;
            }
        });
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->start();
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = "-c";
    try {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d1 = $prefix . "フォルダ";
        rmdir($d1);
    } catch (Exception $e) {}
    if (true) {
        $multiline_string = <<<EOT
        <html>Roy&#039;s height &gt; Sam&#039;s height
        13 &lt; 25
        1111 &amp; 0000 = 0000
        &quot;This is a double quoted string&quot;
        EOT;
        $child = new ChildClass();
        $child->testIsCallable();
    }
    printf("[008] PS and non-PS results differ, dumping data\n");
    $count = 1;
    try {
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    } catch (Exception $e) {}
    if (true) {
        $res = [];
        bar('first try');
    }
    $text = '<p>hello world &trade;</p>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $node->textContent = $text;
    var_dump($node->textContent == $text);
}
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $b = 'ok';
        $_b = $b;
        try {
            set_include_path(__DIR__.'/bug39542;.');
        } catch (Exception $e) {}
        if (true) {
            $EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
        }
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
        $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
        $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
        $strA = 'test &amp; test';
        $strB = 'test & test';
        $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
        try {
            list($value) = yield;
            var_dump($value);
        } catch (Exception $e) {}
        if (true) {
            $a = "20";
            $b = "30";
            $result = range($a, $b);
            var_dump(soundex("Knuth"));
        }
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $stmt1 = $pdo->query($reqOf3);
        display([ $stmt1->fetch() ]);
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $uri = 'http://' . stream_socket_get_name($server, false);
        try {
            zerofill(10, $link, 'DOUBLE PRECISION');
        } catch (Exception $e) {}
        if (true) {
            $obj = new C();
            $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
            fclose($fp);
        }
        $tempstring = "abcdefghjklmnpqrstuvwxyz";
        var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
        $count = 1;
        try {
            var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
        } catch (Exception $e) {}
        if (true) {
            $myClass_object = new myClass();
            $foo_object = new foo();
            $Value_object = new Value();
            $concreteClass_object = new concreteClass();
            $valid_objects = array(
              new stdclass,
              new foo,
              new concreteClass,
              new Value,
              new myClass,
              $myClass_object,
              $myClass_object->foo_object,
              $myClass_object->public_var1,
              $foo_object,
              $Value_object,
              $concreteClass_object
            );
            $db = getDbConnection();
            $sql = '
                SET NOCOUNT ON
                SELECT 0 AS [result]
            ';
            $stmt = $db->query($sql);
            $stmt->closeCursor();
        }
        zerofill(8, $link, 'FLOAT');
    }
}
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        try {
            var_dump(soundex("Knuth"));
        } catch (Exception $e) {}
        if (true) {
            $db = MySQLPDOTest::factory();
            $stmt = $db->prepare('SELECT * FROM test_33689');
            set_error_handler(function($no, $msg) {
                throw new Exception($msg);
            });
        }
        php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
        $arg = new Stdclass();
        $arg->name = array();
        try {
            $html = <<<HTML
            <div id="test"><span>hi there</span></div>
            HTML;
            $dom = new DOMDocument('1.0', 'UTF-8');
            $dom->loadHTML($html);
        } catch (Exception $e) {}
        if (true) {
            $a = array(1,2,3);
            $s1 = "some string";
            $c = $a + $s1;
            var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
        }
        $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
        $isEmpty = $MySQL_Ext->isEmpty();
        var_dump($isEmpty);
    }
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $j = 0;
        try {
            var_dump(strncasecmp("test ", "E", 0));
        } catch (Exception $e) {}
        if (true) {
            $reflector = new ReflectionClass(C::class);
            $dom = Dom\HTMLDocument::createEmpty();
            var_dump($dom->lookupNamespaceURI(""));
        }
        ini_set("intl.error_level", E_WARNING);
        $other = new DateTime("31-July-2008");
        try {
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
            var_dump($ffi->bug_gh16013_return_char());
        } catch (Exception $e) {}
        if (true) {
            $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
            debug_print_backtrace();
        }
        $im = ImageCreateTrueColor(10, 10);
        imagesavealpha($im, true);
    }
}
ob_start();
set_error_handler(function() {
    (y);
});
