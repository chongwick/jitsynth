<?php
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
$headers = $client->__getLastRequestHeaders();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
$t = new Test;
$a = 2;
function f_0() {
    return [(array)$this];
}
class Foo {
    public $dummy1;
    public $dummy2;
}
$f = new Foo;
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 0, 0);
