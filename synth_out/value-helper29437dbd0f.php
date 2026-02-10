<?php
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
class foo
{
// no members
}
$unset_object = new foo();
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
$this->source = $source;
$rounds = [
    'disp', // Correct.
    3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
    null, // No callback. Hopefully this clears everything.
    'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
];
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
function foo(int $x) {
    $a[0] = $x;
    $a[1] = 5;
    echo $a[1];
    $a->foo = 5;
    echo $a[1];
}
$a[0] = $x;
