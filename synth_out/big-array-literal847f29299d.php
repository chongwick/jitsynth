<?php
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
class C extends stdClass {
    public int $a;
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
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
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
}
function f_0() {
    var_dump( $count );
    $myClass_object = new myClass();
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $xml = simplexml_load_string($xmlString);
    }
    $index_array = array (1, 2, 3);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $_ = str_repeat("A", 512);
    }
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
    $id_1_date = '2014-09-23';
    $id_2_date = '2014-09-24';
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
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
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
    }
    if (true) {
        $list = new SplDoublyLinkedList();
        $list->push('o');
        $str = 'Hello World';
    }
    if (!true) {
        $tester = new FPM\Tester($cfg);
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        $tester->expectLogNotice($userMessage, 'dddd');
        $time = '2000-01-01 00:00:00.000000';
        $tz_aus = new DateTimeZone('Australia/Sydney');
        $auz = new DateTime($time, $tz_aus);
    }
    $a[1] = 5;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $index_array = array (1, 2, 3);
    }
    if (true) {
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->initializeLazyObject($obj);
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    }
    if (!true) {
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
    }
}
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
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    printf("printf test 23:%016X\n", 170);
    catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
}
function f_6() {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
    printf("# Proxy:\n");
}
function f_7() {
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    try {
        $blank_line = <<<EOD
        
        EOD;
        $needles = array(
          "\n",
          '\n',
          "\r",
          "\r\n",
          "\t",
          "",
          $blank_line //needle as haystack
        );
        foreach($needles as $needle) {
          var_dump( strrchr($blank_line, $needle) );
        }
        var_dump( strrchr($blank_line, $needle) );
    } catch (Exception $e) {}
    if (true) {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        display($pdo->query("select * from t2")->fetchAll());
        $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                             array(), "php", "");
    }
    try {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
    } catch (Exception $e) {}
    if (true) {
        phpinfo(INFO_VARIABLES);
        $timestamp = "2005-11-08T11:22:07+03:00";
        $wsdl = __DIR__."/bug35142.wsdl";
        $soapClient = new TestSoapClient($wsdl,
            array('trace' => 1, 'exceptions' => 0,
                'classmap' => array('logOnEvent' => 'LogOnEvent',
                    'logOffEvent' => 'LogOffEvent',
                    'events' => 'IVREvents')));
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        $ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
        $result = $soapClient->PostEvents($ivrEvents);
    }
    $a = 1;
    return [0, $a];
}
