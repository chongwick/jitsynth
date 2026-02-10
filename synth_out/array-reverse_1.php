<?php
chdir($oldcwd);
var_dump($value);
var_dump($body->lookupNamespaceURI(""));
__();
$elem->ThrowException();
foo(false, false);
print_r($row);
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump($shm_id1);
function f_0() {
    $dbConnection = new Com('ADODB.Connection');
    $responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
    $a = &$value->a;
    var_dump($b->test);
    ob_end_flush();
}
spl_autoload_register($callback1);
function f_1() {
    $vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
    $this->priv_member = $val;
    $reflector->initializeLazyObject($obj);
    var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
    $child->testIsCallable();
    var_dump(array_map(assert(...), [true, true, false]));
}
$container->appendChild(createElementNS($dom, NULL, "html", "3"));
function f_2() {
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $wsdl = __DIR__."/bug35142.wsdl";
        ob_start();
        $child->testIsCallable();
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
        $tester->start();
        var_dump($body->lookupNamespaceURI("a"));
        $arr = [$class];
        test('Ghost', $obj);
        $b->bar();
        print_r($res);
        $a = new A();
        $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
        var_dump($br);
    }
}
spl_autoload_register(function ($name) {
    if ($name == "B") {
        eval ("abstract class B extends A { }");
    } else if ($name == "A") {
        eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
    } else if ($name == "T") {
        eval ("trait T { public function __construct() { } }");
    }
    return TRUE;
});
