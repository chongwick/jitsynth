<?php
class A {
    public $a;
}
$a = new A();
class foo extends SplFixedArray {
    public function __construct($size) {
    }
}
$x = new foo(2);
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$offsets = array(20, 21, 22, 53, 54);
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
$obj = new testObject();
$obj2 = unserialize(serialize($obj));
function f_0() {
    return "Object1";
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $fp = fopen (__FILE__, "r");
            class C {
                public function __toString() {
                    global $c;
                    $c = [];
                    throw new Exception(__METHOD__);
                }
            }
            $c = new C();
            class C {
                private $priv1 = 'secret1';
                private $priv2 = 'secret2';
                public $pub1 = 'public1';
                public $pub2 = 'public2';
                public $pub3 = 'public3';
                public $pub4 = 'public4';
            }
            $ao = new ArrayObject(new C);
            $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
            $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
            var_dump($stmt->fetch());
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
            zerofill(3, $link, 'SMALLINT');
            ob_end_flush();
        }
    }
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            var_dump($br);
        }
    }
}
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
extract(Foo::bar());
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
$cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
