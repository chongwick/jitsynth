<?php
$str = 'Hello World';
printf("printf test 25:%-2s\n", "gazonk");
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
function foo() {
  var_dump("hello");
}
foo();
stream_wrapper_register('dummy', DummyWrapper::class);
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago, true);
var_dump($diff->invert, $diff->s, $diff->f);
function f_0() {
}
$GLOBALS["obj"] = 24;
$i = "010";
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
