<?php
function f_0() {
    return [$this];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $db = PDOTest::factory();
        $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
        class Box {
            public ?Test $value;
        }
        global $box;
        function test($box) {
            var_dump($box->value = new Test);
        }
        $box = new Box();
        test($box);
        ini_set("intl.error_level", E_WARNING);
        var_dump ( $vars );
        $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
        var_dump(file_get_contents($pkcsfile));
        (new Fiber(function() {
                global $f;
                var_dump((new ReflectionFiber($f))->getTrace());
            }))->start();
    }
}
$ftp = ftp_connect('127.0.0.1', $port);
$subject = 'mail_bug80706';
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( strftime($value) );
      var_dump( strftime($value, $timestamp) );
}
var_dump( strftime($value, $timestamp) );
var_dump(debug_backtrace());
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($;
#[AllowDynamicProperties]
class A {
}
$a = new A;
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(NULL));
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$result->close();
