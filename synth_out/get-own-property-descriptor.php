<?php
function f_0() {
    return 42;
}
function f_1() {
    $lazy = true;
}
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
var_dump($rit->valid());
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
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
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 32 ]);
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$root = simplexml_load_string($xml);
$root->__construct("malformed");
var_dump( range(1.0, 7.0, 6.5) );
$data = ["k" => 0, 1, 2, 3];
$cow_copy = $data;
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
$row_stmt = null;
var_dump($row_stmt);
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
$a = new B;
$a->bar();
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
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
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 3, 'value' => 15));
$max = 0x66666666;
rename("phar://a.phar/x", "phar://a.phar/y");
$dfp = opendir ( __DIR__ );
var_dump($_SESSION);
$filename = __DIR__ . '/bug77432.phar';
unlink($filename);
var_dump($s);
$a[10] = "42";
$i = "010";
var_dump($a[$i], isset($a[$i]));
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$readonly_anon->field = 123;
var_dump($br);
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
function test()
{
    echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
}
test();
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
$reflector = new ReflectionClass(C::class);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        });
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $zip = new ZipArchive();
    $zip->addFromString('foo.txt', 'foo bar foobar');
}
$reflector = new ReflectionClass(DateTime::class);
$a[10] = "42";
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
zerofill(9, $link, 'DOUBLE');
var_dump(substr_count("aaa", "a", 0, 0));
foo();
function foo() {
    global $LAST;
    ($LAST = $LAST + 0) * 1;
    echo "ok\n";
};
$tz1 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
$zip = new ZipArchive();
$zip->addFromString('foo.txt', 'foo bar foobar');
class C {
    public $a;
    public int $b = 1;

    public function __construct(int $a) {
        var_dump(__METHOD__);
        $this->a = $a;
        $this->b = 2;
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
test('Proxy', $obj);
printf("# Proxy:\n");
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
$tests = array(
    1 => array(
        '$6$saltstring',
        'Hello world!',
        '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
    ),
    2 => array(
        '$6$rounds=10000$saltstringsaltstring',
        'Hello world!',
        '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
    ),
    3 => array(
        '$6$rounds=5000$toolongsaltstring',
        'This is just a test',
        '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
    ),
    4 => array(
        '$6$rounds=1400$anotherlongsaltstring',
        'a very much longer text to encrypt.  This one even stretches over morethan one line.',
        '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
    ),
    5 => array(
        '$6$rounds=77777$short',
        'we have a short salt string but not a short password',
        '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
    ),
    6 => array(
        '$6$rounds=123456$asaltof16chars..',
        'a short string',
        '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
    ),
    7 => array(
        '$6$$bar$',
        'foo',
        '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
    ),
    8 => array(
        '$6$rounds=10$roundstoolow',
        'the number of rounds is too low',
        '*0'
    ),
    8 => array(
        '$6$rounds=1000000000$roundstoohigh',
        'the number of rounds is too high',
        '*0'
    ),
);
$dt = new DateTime('@1604215800');
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
class A
{
    public string $prop;
}
$a = new A();
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
$db = PDOTest::factory();
$text = 'This is an ‘example’ of using DOM splitText';
$st;
function f_3() {
    return true;
}
function f_4() {
}
sprintf('%$s, %2$s %1$s', "a", "b");
$time = '9999-11-33';
$timeZone = new DateTimeZone('UTC');
$dateTime = new DateTime($time, $timeZone);
$dom = new DOMDocument();
$xpath = new DOMXpath($dom);
foreach($xpath->query('/root/noexist') as $child) {
    var_dump($child);
}
var_dump($child);
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
$test=array();
$test[]=$test2;
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$db = createDB();
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
testLastInsertId($db);
$a[10] = "42";
var_dump($a["10"], isset($a["10"]));
