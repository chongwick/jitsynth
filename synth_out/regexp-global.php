<?php
$this->extData[] = 'Bar';
$rows = array();
for ($i = 0; $i < 2; $i++) {
        $rows[$i] = mysqli_fetch_assoc($res);
        $references[$idx]['row_ref'] 		= &$rows[$i];
        $references[$idx]['row_copy'] 	= $rows[$i];
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $references[$idx]['id_copy']		= $rows[$i]['id'];
        /* enforce separation */
        $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    }
$rows[$i] = mysqli_fetch_assoc($res);
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
$cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
debug_print_backtrace();
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w["bug69279.txt"] = "Sample content.";
gth = 3;

$d;
mysqli_free_result($res);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
$users = MailBox::USERS;
$to = $users[0];
$from = ini_get('sendmail_from');
$bcc = $users[2];
$subject = 'mail_bug80706';
$message = 'hello';
$xMailer = 'bug80706_x_mailer';
$headers = "From: {$from}\r\n"
    . "Bcc: {$bcc}\r\n"
    . "X-Mailer: {$xMailer}";
$res = mail($to, $subject, $message, $headers);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
$ret = new stdClass;
$a = 1;
$tester = new FPM\Tester($cfg);
$tester->close();
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
$t = new derived();
$g = 'hi';
$stmt->close();
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
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$dom = new DOMDocument;
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
gth = 3;

$d;
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
$arr = array('a', 'b');
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Maxlength    : %d\n", $field->max_length);
);
if (!$reader->open($fil
irstAttribute();
            echo $reade;
A::$a = 'A new';
$pem_cert = '
-----BEGIN CERTIFICATE-----
MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
+Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
-----END CERTIFICATE-----
';
var_dump(openssl_x509_parse($pem_cert));
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
ob_end_clean();
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
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
$bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
    $cdata = $ffi->new('int8_t');
    $cdata->cdata = $val;
    return $cdata;
};
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
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
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
}
$version = mysqli_get_server_version($link);
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->use_result();
$client2 = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("")
    ],
  ]),
]);
$headers = $client2->__getLastRequestHeaders();
$this->extData[] = 'Bar';
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
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
$callable($nodes);
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
$db = MySQLPDOTest::factory();
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
var_dump($foo);
$result = get_declared_classes();
var_dump(array_search('foo', $result));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
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
$cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
$im = imagecreate(800, 800);
imagecolorallocate($im, 255, 255, 255);
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        gzclose($h);
        $array = array(
            1 => "entry_1",
            2 => "entry_2",
            3 => "entry_3",
            4 => "entry_4",
            5 => "entry_5"
        );
        var_dump($array);
        if (true) {
            exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
            ini_set("soap.wsdl_cache_enabled",0);
        }
        if (!true) {
            class C extends stdClass {
                public int $a;
            }
            $reflector = new ReflectionClass(C::class);
            $obj = new C();
            $reflector->resetAsLazyGhost($obj, function ($obj) {
                });
            $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
            $descriptorspec = [STDIN, STDOUT, STDOUT];
            for ($i = 1; $i <= 255; $i++) {
              echo "Testing $i\n";
              try {
                $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
                var_dump($proc);
                proc_close($proc);
              } catch (Error) {}
            }
            $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
            proc_close($proc);
        }
    }
}
function f_3() {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $s = 'O:15:"ReflectionClass":0:{}';
        var_dump(unserialize($s));
        if (true) {
            $eml = __DIR__ . "/signed.eml";
            var_dump(openssl_pkcs7_verify($eml, 0));
        }
        if (!true) {
            $cert = "file://" . __DIR__ . "/cert.crt";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
        }
        if (true) {
            $filename = "bug51997.bz2";
            $bz = bzopen($filename, "r");
            bzclose($bz);
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
        }
        if (!true) {
            $originalEnvelopeData = "any string with \x1a is cut at this point.";
            $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
            $envelopeData = file_get_contents($tmpFileOut2);
            var_dump($originalEnvelopeData === $envelopeData);
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
            $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
                $cdata = $ffi->new('enum bug_gh16013_enum');
                $cdata->cdata = $val;
                return $cdata;
            };
            var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
        }
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    $loop_counter = 1;
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $initialRequest = false;
        $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
        $envelopeData = file_get_contents($tmpFileOut2);
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
        $ffi = FFI::cdef($header);
        function get() {
            $t = new stdClass;
            $t->prop = $t;
            return $t;
        }
        var_dump(get());
    }
    $textascii = 'This is an "example" of using DOM splitText';
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($textascii);
    $do
    ->appendChild($node);
    
    pr;
    function f_7() {
        return [(array)$this];
    }
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    class C {
        public $a;
        public int $b = 1;
    
        public function __construct(int $a) {
            var_dump(__METHOD__);
            $this->a = $a;
            $this->b = 2;
        }
    }
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C(1);
    });
    test('Proxy', $obj);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $other = new DateTime("31-July-2008");
}
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump($array);
$assoc_array = array ('one' => 1, 'two' => 2);
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$x = new SoapClient('http://i_dont_exist.com/some.wsdl');
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =;
}
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
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$attr = $root->attributes('urn:x');
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$host = curl_cli_server_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
$dt = new DateTime('first day of January 2011');
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
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
var_dump($body->lookupNamespaceURI(""));
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
$tester->terminate();
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
