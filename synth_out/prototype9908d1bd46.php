<?php
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
class A {
    public $a;
}
class C {
    public int $a;
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
function f_0() {
}
function f_1() {
}
function f_2() {
}
function f_3() {
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
    $japanese_so = pack('H4', '835c');
    $reflector = new ReflectionClass(DateTime::class);
    $pid = pcntl_fork();
    $a = new PDO("sqlite::memory:");
    $rez = $a->query ("SELECT * FROM test_35336")->fetchAll(PDO::FETCH_CLASS, 'EEE');
    $headers = ['Host: okey.com'];
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "w");
    return function() {
            static $foo = 0;
            yield ++$foo;
        };
}
$r = new ReflectionClass('stdClass');
$B = new B();
$strA = 'test &amp; test';
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
printf("printf test 32:%.17g\n", -INF);
var_dump('ERR');
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
var_dump($prop->getRawValue($a));
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
$code = <<<'PHP'
/* Receive */
$content = trim(file_get_contents("php://input")) . PHP_EOL;
PHP;
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $empty_string = <<<EOT
    EOT;
    $blank_line = <<<EOT
    
    EOT;
    $multiline_string = <<<EOT
    <html>Roy&#039;s height &gt; Sam&#039;s height
    13 &lt; 25
    1111 &amp; 0000 = 0000
    &quot;This is a double quoted string&quot;
    EOT;
    $diff_whitespaces = <<<EOT
    <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
    1111\t\t &amp; 0000\v\v = \f0000
    &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
    EOT;
    $numeric_string = <<<EOT
    <html>11 &lt; 12. 123 string 4567
    &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
    EOT;
    $quote_char_string = <<<EOT
    <html>&lt; This's a string with quotes:
    "strings in double quote" &amp;
    'strings in single quote' &quot;
    this\line is &#039;single quoted&#039; /with\slashes </html>
    EOT;
    $res_heredoc_strings = array(
      //heredoc strings
      $empty_string,
      $blank_line,
      $multiline_string,
      $diff_whitespaces,
      $numeric_string,
      $quote_char_string
    );
    for($index =0; $index < count($res_heredoc_strings); $index ++) {
      echo "-- Iteration $count --\n";
      var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
      $count++;
    }
    var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
    $references = array();
    $idx = 0;
    $references[$idx++]['id_copy']	= $row['id'];
}
function f_5() {
    $obj = new C();
}
$row_stmt = null;
$pass = "qwerty";
var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
$i = 1;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
function f_6() {
}
function f_7() {
}
$var = -PHP_INT_MAX - 1;
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "SELECT bit_column_1 FROM $tbl";
$result = $mysqli->query($sql);
$closure1 = new_closure_gen();
$closure2 = new_closure_gen();
$gen1 = $closure1();
$gen2 = $closure1();
$gen3 = $closure2();
foreach (array($gen1, $gen2, $gen3) as $gen) {
    foreach ($gen as $val) {
        var_dump($val);
    }
}
foreach ($gen as $val) {
        var_dump($val);
    }
var_dump($val);
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
$client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
$obj = new Test;
$res = [];
$filename = "bug51997.bz2";
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
