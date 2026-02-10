<?php
function f_0() {
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    while (true) {
        break;  // avoid infinite loop
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        if (true) {
            return 42;
        }
        $interval = new DateInterval('P1D');
    }
    return 'printer';
}
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
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
$t->test();
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
