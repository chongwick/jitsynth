<?php
function f_0() {
    $bar = new DateTime();
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $s1 = "some string";
    $str = <<<EOD
    us
    ing heredoc string
    EOD;
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $bar = (int)$foo;
    if (true) {
        $host = PHP_CLI_SERVER_HOSTNAME;
        var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    }
    if (!true) {
        $a = 'ok';
        $b = 'ok';
        $_a = $a;
        $_b = $b;
        var_dump($_a, $_b);
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
        print_r($client->GetExpressCheckoutDetails());
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            $fp = fopen(__FILE__, "r");
            fclose($fp);
        }
    }
    var_dump(sprintf("%.988f", 1.23456789e10));
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            $now = new DateTime('2018-11-03 11:34:20.781751');
            $ago = new DateTime('2018-11-03 11:34:20.000000');
            $diff = $now->diff($ago, true);
            var_dump($diff->invert, $diff->s, $diff->f);
        }
        if (!true) {
            $array1 = array(1, 2);
            $data_compare_func = 'compare_function';
            $key_compare_func = 'compare_function';
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
            foreach($inputs as $key =>$value) {
                echo "\n--$key--\n";
                try {
                    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
                } catch (TypeError $e) {
                    echo $e->getMessage(), "\n";
                }
            }
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        }
    }
    print_r($str_instead);
    $f_base = "67647私はガラスを食べられます.mov";
    $f = __DIR__ . DIRECTOR
    _SEPARATOR . $f_base;
    
    /* Streams mb path sup
    _MIME_TYPE);
    var_dump($fi->file($f))
    
    
    ?>
    +++DONE+++;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $stmt->execute();
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
    $a=glob("./*.jpeg");
    var_dump($a);
    var_dump(new FooBar);
    var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
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
$cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
);
if (!$reader->open($fil;
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR
_SEPARATOR . $f_base;

/* Streams mb path sup;
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
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
[$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
$tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }
$this->server = new SoapServer($wsdl);
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$res = [];
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
$reflector = new ReflectionClass(C::class);
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }
$this->server = new SoapServer($wsdl);
function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
$this->server->handle($request);
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
$a = 1;
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
$client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
