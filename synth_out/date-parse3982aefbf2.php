<?php
function a() {
    $a = $b = $c = 2;
    foreach(range(1, 5) as $v) {
        yield $v;
    }
    return;
}
class Box {
    public ?Test $value;
}
function test($box) {
    var_dump($box->value = new Test);
}
class C {
	use T;
	private array $a = [1];
}
function foo() {
  var_dump("hello");
}
class B extends A
{
    use T2;
}
function f_0() {
    $a = 'ok';
    var_dump( range(1, 7, 0) );
}
function f_1() {
    $date_format = DATE_RFC2822;
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    EOT;
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponseHeaders());
}
function f_2() {
    $a = $b = $c = 2;
    foreach (a(range(1, 3)) as $a) {
        var_dump($a);
    }
    var_dump($a);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $body = $dom->getElementsByTagName("body")[0];
    $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
    $max = 0x66666666;
    $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
    global $box;
    $box = new Box();
    test($box);
}
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
$obj = $res->fetch_object();
$reader = new XMLReader();
$attr = $reader->moveToAttribute('idx');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$date = '7.8.2010';
$unset_var = 10;
$test=array();
$g = 1;
$cfg['main'] = <<<EOT
[global]
error_log = {{FILE:LOG}}
log_level = notice
include = {{INCLUDE:CONF}}
EOT;
$a = new A();
$depth0 = "depth02";
$a->foo = 5;
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
$x = match (true) {};
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
if (true) {
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    var_dump($e->getMessage());
}
$g = 1;
printf("printf test 4:%.10f\n", 10.0/3);
clearstatcache();
$output = array();
var_dump($output);
printf("printf test 19:%16x\n", 170);
$db = MySQLPDOTest::factory();
foreach ($db->query('SELECT * FROM test_33689') as $row) {
    print_r($row);
}
print_r($row);
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
$o = new C;
$o->foo();
foo();
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
var_dump(http_get_last_response_headers());
var_dump(intlcal_get_error_message(null));
printf("printf test 8:<%20s>\n", "foo");
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
$b = new B();
$b->aa();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $offset3 = PHP_INT_MAX * 16;
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
}
$foo = new Foo;
$baz = (float)$foo;
var_dump( range(1.0, 7.0, 0.0) );
