<?php
function f_0() {
    $pdo = MySQLPDOTest::factory();
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
$i = "010";
$a = "lest";
$a[0] = "t";
function f_1() {
    $insert = null;
    if (true) {
        catch (ValueError $e) {
            echo $e->getMessage(), "\n";
        }
        catch (ArgumentCountError $e) {
            echo $e->getMessage(), "\n";
        }
        catch (ValueError $e) {
            echo $e->getMessage(), "\n";
        }
        echo $e->getMessage(), "\n";
    }
    return 0;
}
$ar1 = array("row1" => 2, "row2" => 1);
$args = array($ar1);
var_dump(call_user_func_array("array_multisort", $args));
var_dump(strncasecmp("test ", "E", 10));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
$f = __DIR__."/data/test.txt.gz";
$errcontext = '';
printf("printf test 7:%010.2f\n", 2.5);
var_dump(soundex("Lloyd"));
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
foreach( $strings as $str ){
  var_dump(nl2br($str) );
}
var_dump(nl2br($str) );
printf("printf test 18:%16b\n", 170);
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$_SERVER = [ 'test' => 'test' ];
$reference =& $_SERVER;
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
