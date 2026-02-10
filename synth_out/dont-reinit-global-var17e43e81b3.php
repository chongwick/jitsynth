<?php
$dsn = ini_get('pdo.dsn.mysql');
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->use_result();
session_write_close();
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$id = odbc_result($res, "ID");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
$style = array();
$i = 0;
$style[$i++] = $color;
$db = MySQLPDOTest::factory();
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
$test = function (#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
};
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$server->addfunction("test");
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
$this->logOffEvent = $logOffEvent;
$references = array();
debug_zval_dump($references);
$this->show();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
define ('foobar', 1);
var_dump(new FooBar);
