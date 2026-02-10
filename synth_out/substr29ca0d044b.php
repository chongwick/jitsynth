<?php
$loop_counter = 1;
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
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
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
var_dump(soundex("Lukasiewicz"));
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("DROP TABLE temp");
catch (PDOException $e) {
    var_dump($e->getCode());
}
var_dump($e->getCode());
$userMessage = "'user' directive is ignored when FPM is not running as root";
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
$test1 = new B1;
$test1->test();
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
mysqli_free_result($res);
mt_srand(1234567890);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
date_default_timezone_set("UTC");
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
$array_object = array();
var_dump($array_object);
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 5));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(http_get_last_response_headers());
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
function test()
{
    echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
}
test();
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
class C {
    public private(set) string $prop1 {
        set => $value;
    }
    public private(set) string $prop2 {
        get => $this->prop2;
    }
}
$c = new C();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class C {
        public function __toString() {
            global $c;
            $c = [];
            throw new Exception(__METHOD__);
        }
    }
    $c = new C();
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        class A {
            private static $x = 1;
        }
        class C extends A {
            function bar() {
                var_dump(A::$x);
            }
        }
        $b = new C;
        class TestSoapClient extends SoapClient
        {
            public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
            {
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
        }
        $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
        function do_throw() { throw new Exception; }
        $f = function () {};
        $f->__invoke(do_throw());
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
            var_dump($namespaceless->lookupNamespaceURI("a"));
        }
    }
}
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $dir = opendir('foo://bar');
    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
}
var_dump(intlcal_is_weekend(1));
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $unset_var = 10;
        class classWithToString
        {
            public function __toString() {
                return "Class A object";
            }
        }
        class classWithoutToString
        {
        }
        $heredoc = <<<EOT
        hello world
        EOT;
        $inputs = array(
        
              // int data
              'int 0' => 0,
              'int 1' => 1,
              'int 12345' => 12345,
              'int -12345' => -2345,
        
              // float data
              'float 10.5' => 10.5,
              'float -10.5' => -10.5,
              'float 12.3456789000e10' => 12.3456789000e10,
              'float -12.3456789000e10' => -12.3456789000e10,
              'float .5' => .5,
        
              // null data
              'uppercase NULL' => NULL,
              'lowercase null' => null,
        
              // boolean data
              'lowercase true' => true,
              'lowercase false' =>false,
              'uppercase TRUE' =>TRUE,
              'uppercase FALSE' =>FALSE,
        
              // empty data
              'empty string DQ' => "",
              'empty string SQ' => '',
        
              // string data
              'string DQ' => "string",
              'string SQ' => 'string',
              'mixed case string' => "sTrInG",
              'heredoc' => $heredoc,
        
              // object data
              'instance of classWithToString' => new classWithToString(),
              'instance of classWithoutToString' => new classWithoutToString(),
        
              // undefined data
              'undefined var' => @$undefined_var,
        
              // unset data
              'unset var' => @$unset_var,
        );
        $reflector = new ReflectionClass(C::class);
        $priorityQueue = new SplPriorityQueue();
        var_dump($priorityQueue->getExtractFlags());
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            class C extends stdClass {
                public int $a;
            }
            $reflector = new ReflectionClass(C::class);
            $obj = new C();
            $reflector->resetAsLazyProxy($obj, function () {
                return new C();
            });
        }
    }
}
$date = '7.8.2010';
$unixtime = strtotime($date);
$date = new DateTime('@'.$unixtime);
$now = new DateTimeImmutable();
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
$bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
    $cdata = $ffi->new('float');
    $cdata->cdata = $val;
    return $cdata;
};
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
class A
{
    public $a = array();

    public function __construct()
    {
        $this->a[] = new B(1);
        $this->a[] = new B(2);
    }
}
$a = unserialize(serialize(new A()));
$heredoc = <<<EOT
hello world
EOT;
$count = 1;
$date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
 = new DOMDocument('1.0', 'UTF-8');
$no;
$i = 0;
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    $ch = curl_init();
    curl_close($ch);
}
$a = 1;
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data3'] = 300;
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
$needle = base64_decode('44CC');
$tStamp = mktime (17, 17, 17, 10, 27, 2004);
$initialRequest = false;
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$users = MailBox::USERS;
$to = $users[0];
$bcc = $users[2];
$subject = 'mail_bug80706';
foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
    $mailBox = MailBox::login($mailAddress);
    $mail = $mailBox->getMailsBySubject($subject);
    $mailBox->logout();

    if ($mail->isAsExpected($from, $to, $subject, $message)) {
        echo "Found the email. {$recipient} received.\n";
    }

    if ($mail->getHeader('X-Mailer') === $xMailer) {
        echo "The specified x-Mailer exists.\n\n";
    }
}
$mailBox = MailBox::login($mailAddress);
$mail = $mailBox->getMailsBySubject($subject);
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
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
$t = new base();
$file_handle = fopen(__FILE__, "r");
$values = array (
  /* integers */
  0,  // zero as argument
  000000123,  //octal value of 83
  123000000,
  -00000123,  //octal value of 83
  -12300000,
  0xffffff,  //hexadecimal value
  123456789,
  1,
  -1,

  /* floats */
  -0.0,
  +0.0,
  1.234,
  -1.234,
  -2.000000,
  2.0000000,
  -4.0001e+5,
  4.0001E+5,
  6.99999989,
  -.5,
  .567,
  -.6700000e-3,
  -.6700000E+3,
  1E-5,
  -1e+5,
  1e+5,
  1E-5,

  /* strings */
  "",
  '',
  " ",
  ' ',
  "0",
  "\0",
  '\0',
  "\t",
  '\t',
  "PHP",
  'PHP',
  "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars

  /* boolean */
  TRUE,
  FALSE,
  true,
  false,

  /* arrays */
  array(),
  array(NULL),
  array(true),
  array(""),
  array(''),
  array(array(1, 2), array('a', 'b')),
  array("test" => "is_array", 1 => 'One'),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test'),

  /* resources */
  $file_handle
);
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $counter = 1;
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $dyadic = 0.00000000000045474735088646411895751953125;
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
}
class A
{
    public string $prop;
}
$a = new A();
$a = new Test();
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
};
$outfile = tempnam(sys_get_temp_dir(), "ssl");
for ($i_10 = 0; $i_10 < 10; $i_10++) {
    $dir_handle = opendir( __DIR__ );
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
    $strings_with_nulls = array(
                       "\0",
                       '\0',
                               "hello\0world",
                               "\0hel\0lo",
                               "hello\0",
                               "\0\0hello\tworld\0\0",
                               "\\0he\0llo\\0",
                               'hello\0\0'
                               );
    foreach( $strings_with_nulls as $string )  {
      echo "\n--- Iteration $counter ---\n";
      var_dump( strtok($string, "\0") );
      for($count = 1; $count <= 5; $count++)  {
        var_dump( strtok("\0") );
      }
      $counter++;
    }
    var_dump( strtok($string, "\0") );
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = "-c";
}
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    date_default_timezone_set("UTC");
    var_dump(new FooBar);
    $gen = (function() {
        yield from (function() { yield; })();
    })();
}
$fn = function() { return static::name(); };
$GLOBALS['a'] = "bug\n";
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$other = new DateTime("31-July-2008");
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Author'][0] === '?');
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
class B {

    private $mysqli;

    public function __construct() {
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $row = $result->fetch_object();
        echo $row->my_time."<br>\n";
        $result->close();
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
$B = new B();
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$id = odbc_result($res, "ID");
printf("# Ghost:\n");
$offsets = array(20, 21, 22, 53, 54);
$string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
$needle = base64_decode('44CC');
foreach($offsets as $i) {
    echo "\n-- Offset is $i --\n";
    echo "--Multibyte String:--\n";
    try {
        var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
    echo"--ASCII String:--\n";
    try {
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$fp = fopen($log_file, 'w+');
for ($i = 0; $i < 5; $i++) {
    $v[$i] = 'hi'.$i;
}
$v[$i] = 'hi'.$i;
ob_end_flush();
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Decimals     : %d\n", $field->decimals);
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
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
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
$start_key = 0;
$num = 2;
$unset_var = 10;
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
for($index = 0; $index < count($values); $index ++)
{
  echo "-- Iteration $counter --\n";
  $val = $values[$index];

  var_dump( array_fill($start_key , $num , $val) );

  $counter++;
}
$val = $values[$index];
var_dump( array_fill($start_key , $num , $val) );
error_reporting(E_ALL);
$_ = str_repeat("A", 512);
openssl_seal($_, $_, $_, array_fill(0,64,0));
$text = 'This is an ‘example’ of using DOM splitText';
$st
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
->appendChild($node);

pr;
date_default_timezone_set('UTC');
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
}
global $box;
$box->value = null;
function test($box) {
    var_dump($box->value = new Test);
}
var_dump($box->value = new Test);
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
var_dump($br);
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$var = 10;
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
var_dump( array_unshift($temp_array, $var) );
clearstatcache();
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
foo(false, true);
$db = MySQLPDOTest::factory();
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump($i=1);
$dom = new DOMImplementation();
$type = $dom->createDocumentType('html');
var_dump($type->childNodes);
var_dump(preg_replace_callback_array([], ''));
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
var_dump(json_decode('{"":"value", "key":"value"}', true));
$fp = fopen (__FILE__, "r");
fclose($fp);
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
http_server_kill($pid);
time_nanosleep(0, 1000000000);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
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
zerofill(6, $link, 'INTEGER');
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
var_dump($res);
var_dump($row);
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
$bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
    $cdata = $ffi->new('float');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
var_dump($temp_array);
var_dump(preg_replace_callback_array([], ''));
printf("printf test 2:%d\n", 42);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
