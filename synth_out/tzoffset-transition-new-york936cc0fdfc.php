<?php
var_dump(json_decode('{"key":"value", "":"value"}', true));
var_dump(strlen(file_get_contents('php://input')));
$offsets = array(20, 21, 22, 53, 54);
foreach($offsets as $i) {
    echo "\n-- Offset is $i --\n";
    echo "--Multibyte String:--\n";
    try {
        var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
    echo"--ASCII String:--\n";
    try {
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
var_dump(mb_strpos('This is na English ta', 'a', $i));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
$fixedArray = new SplFixedArray(1);
$generator = dumpElement();
$generator->send($fixedArray);
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
var_dump($line);
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
$test1 = new B1;
$test1->test();
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
