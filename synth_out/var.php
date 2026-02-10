<?php
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
;

mkdir($d0);
;
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
$bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
    $cdata = $ffi->new('uint32_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
if (true) {
    $fd = fopen('php://memory','w');
}
if (true) {
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
}
pcntl_wait($status);
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
var_dump($body->lookupNamespaceURI("a"));
if (true) {
    $timestamp = "2005-11-08T11:22:07+03:00";
    $wsdl = __DIR__."/bug35142.wsdl";
    class TestSoapClient extends SoapClient {
      private $server;
    
      function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    
      function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    
    }
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $soapClient = new TestSoapClient($wsdl,
        array('trace' => 1, 'exceptions' => 0,
            'classmap' => array('logOnEvent' => 'LogOnEvent',
                'logOffEvent' => 'LogOffEvent',
                'events' => 'IVREvents')));
    $logOnEvent = new LogOnEvent(34567, $timestamp);
    $ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
    $result = $soapClient->PostEvents($ivrEvents);
    class LogOnEvent {
      public $audienceMemberId;
      public $timestamp;
    
      function __construct($audienceMemberId, $timestamp) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
      }
    }
    class IVREvents {
      public $version;
      public $activityId;
      public $messageId;
      public $source;
      public $logOnEvent;
      public $logOffEvent;
    
      function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
        $this->version = $version;
        $this->activityId = $activityId;
        $this->messageId = $messageId;
        $this->source = $source;
        $this->logOnEvent = $logOnEvent;
        $this->logOffEvent = $logOffEvent;
      }
    };
}
printf("printf test 23:%016X\n", 170);
$this->show();
ini_set("session.save_handler","files");
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
$fd = fopen('php://memory','w');
fwrite($fd, "foo");
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
phpinfo(INFO_MODULES);
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
call_user_func("static::ok");
$im = imagecreate(800, 800);
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
$thirty = M_PI / 6.0;
var_dump(sin($thirty));
function foo() {
  var_dump($i=1);
  return $i;
}
var_dump(foo());
$output = array();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
