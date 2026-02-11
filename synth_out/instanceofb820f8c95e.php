<?php
class di extends DateInterval {
    public $unit = 1;
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
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
class foo
{
// no members
}
$I = new di('P10D');
print_r($I);
var_dump(sprintf("%X", 12));
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
var_dump(getopt("abcd"));
function f_0() {
    $obj = new Test;
    $db = PDOTest::factory();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    $canary = new Canary(null);
    $iterable = f($canary);
    $a = new PDO("sqlite::memory:");
    function f_1() {
    }
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    error_reporting(E_ALL);
    var_dump ( rtrim("rtrim test        ", " ") );
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    var_dump(get_class_vars(C::class));
    $im = imagecreate(800, 800);
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    var_dump(soundex("Knuth")       == soundex("Kant"));
    $GLOBALS['b'] = 2;
    var_dump(__METHOD__);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    php_cli_server_start($code, null, $args);
}
$db = PDOTest::factory();
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
function f_2() {
    function f_3() {
    }
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    $fp = fopen(__FILE__, "r");
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
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            try {
                if (true) {
                    ++$testCasesTotal;
                    ++$testCasesTotal;
                }
            } catch (Exception $e) {}
            if (true) {
                var_dump(substr_count("", "a", 0, 0));
                $test->a++;
                ++$test->a;
            }
        }
    }
    catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
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
    $tester->expectLogStartNotices();
    function f_6() {
    }
    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_object = new foo();
    $not_objects = array (
      0,
      -1,
      0.1,
      -10.0000000000000000005,
      10.5e+5,
      0xFF,
      0123,
      $fp,  // resource
      $dfp,
      array(),
      array("string"),
      "0",
      "1",
      "",
      true,
      NULL,
      null,
      @$unset_object, // unset object
      @$undefined_var, // undefined variable
    );
    foreach ($not_objects as $type ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_object($type) );
    }
    var_dump( is_object($type) );
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
unlink("$d1\\test1.txt");
