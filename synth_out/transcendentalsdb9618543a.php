<?php
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
}
$a = new Test();
$textascii = 'This is an "example" of using DOM splitText';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$zip = new ZipArchive();
$zip->addFromString('foo.txt', 'foo bar foobar');
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
get_basename_with_cp($d1, 65001);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$datefmt->parse('abc');
var_dump($row);
