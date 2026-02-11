<?php
class foo
{
  function __toString() {
    return "Object";
  }
}
class C extends stdClass {
    public int $a;
}
$tbl = "test";
$sql = "SELECT bit_column_1 FROM $tbl";
$object1 = new foo();
function f_0() {
    function f_1() {
        return true;
    }
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    return $i;
}
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
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
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$obj = new C();
$array = [];
