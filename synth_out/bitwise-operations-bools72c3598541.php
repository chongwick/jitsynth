<?php
class A {

    private $mysqli;

    public function __construct() {
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $row = $result->fetch_object();
        echo $row->my_time."<br>\n";
        $result->close();
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class Box {
    public ?Test $value;
}
function test() {
    (new B)->foo();
    (new B)->bar();
    (new B)->baz();
    B::baz();
}
class B extends A
{
    use T2;
}
function attach($db, $callback) { $db->setNoticeCallback($callback); }
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
function f_0() {
    $A = new A();
    if (true) {
        $num = 2;
    }
    var_dump($br);
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    print_r($data);
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    var_dump($res);
    $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
    var_dump($dt);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
}
function f_1() {
    if (true) {
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $diff = $ago->diff($now, true);
    }
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    spl_autoload_register();
    setlocale(LC_ALL, "C");
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump(session_save_path());
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
}
function f_2() {
    if (true) {
        $box = new Box();
    }
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
    spl_autoload_register(function ($name) {
    });
    $file_handle = fopen(__FILE__, "r");
    $values = array (
      /* integers */
      0,  // zero as argument
      000000123,  //octal value of 83
      123000000,
      -00000123,  //octal value of 83
      -12300000,
      0xffffff,  //hexadecimal value
      123456789,
      1,
      -1,
    
      /* floats */
      -0.0,
      +0.0,
      1.234,
      -1.234,
      -2.000000,
      2.0000000,
      -4.0001e+5,
      4.0001E+5,
      6.99999989,
      -.5,
      .567,
      -.6700000e-3,
      -.6700000E+3,
      1E-5,
      -1e+5,
      1e+5,
      1E-5,
    
      /* strings */
      "",
      '',
      " ",
      ' ',
      "0",
      "\0",
      '\0',
      "\t",
      '\t',
      "PHP",
      'PHP',
      "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
    
      /* boolean */
      TRUE,
      FALSE,
      true,
      false,
    
      /* arrays */
      array(),
      array(NULL),
      array(true),
      array(""),
      array(''),
      array(array(1, 2), array('a', 'b')),
      array("test" => "is_array", 1 => 'One'),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test'),
    
      /* resources */
      $file_handle
    );
    foreach( $values as $value ) {
      echo "-- Iteration $counter --\n";
      debug_zval_dump( $value );
      $counter++;
    }
    debug_zval_dump( $value );
    $db = PDOTest::factory();
    $db->beginTransaction();
    test();
    $b = new B();
    $b->aa();
}
function f_3() {
    if (true) {
        $loop_counter = 1;
    }
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
    $db->setNoticeCallback($callback);
    var_dump(pcntl_wexitstatus($status));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    $arg = new Stdclass();
    print_r($arg);
}
function f_4() {
    if (true) {
        $dom = new DOMDocument;
    }
    if (true) {
        $x = new X;
    }
    $before = memory_get_usage();
    $after = memory_get_usage();
    var_dump($before === $after);
    $zip = new ZipArchive();
    $zip->close();
    var_dump(__METHOD__);
    var_dump('ERR');
    $tester = new FPM\Tester($cfg);
    $tester->terminate();
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
}
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
unlink($file);
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Author']);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
display($pdo->query("select * from t2")->fetchAll());
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
$a = new B;
$a->bar();
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
$dbh = @pg_connect($conn_str);
pg_close($dbh);
