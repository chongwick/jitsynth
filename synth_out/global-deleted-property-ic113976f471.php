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
function f_0() {
    return 0;
}
$HTTP_RAW_POST_DATA = <<<EOF
<?xml version="1.0" encoding="ISO-8859-1"?>
<SOAP-ENV:Envelope
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:si="http://soapinterop.org/xsd">
  <SOAP-ENV:Body>
    <ns1:test xmlns:ns1="http://testuri.org"/>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOF;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $argv = array(1, 2, 3);
    var_dump($argv);
}
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
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $foo = new FooBar();
    print_R($foo);
}
$counter = 1;
$counter++;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
}
$var = 10;
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $client->getQuote("ibm");
}
