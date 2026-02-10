<?php
$argv = null;
$counter = 0;
$fn = "bug71263.bz2";
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec;
$japanese_so = pack('H4', '835c');
$timestamp = "2005-11-08T11:22:07+03:00";
function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    echo "$request\n";
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
$logOnEvent = new LogOnEvent(34567, $timestamp);
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
    $this->version = $version;
    $this->activityId = $activityId;
    $this->messageId = $messageId;
    $this->source = $source;
    $this->logOnEvent = $logOnEvent;
    $this->logOffEvent = $logOffEvent;
  }
$this->activityId = $activityId;
$a = NULL;
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
set_error_handler("customErrorHandler");
var_dump(-2147483648 % -1);
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
