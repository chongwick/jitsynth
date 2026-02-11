<?php
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
class A {
    public $a;
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
function foo() {
  var_dump($i=1);
  return $i;
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
class C {
    public int $a;
}
class B extends A {
    static function name() { return 'B'; }
}
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
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
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
function f_0() {
    $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $tbl = "test";
        $empty_string = <<<EOT
        EOT;
        $blank_line = <<<EOT
        
        EOT;
        $multiline_string = <<<EOT
        <html>Roy&#039;s height &gt; Sam&#039;s height
        13 &lt; 25
        1111 &amp; 0000 = 0000
        &quot;This is a double quoted string&quot;
        EOT;
        $diff_whitespaces = <<<EOT
        <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
        1111\t\t &amp; 0000\v\v = \f0000
        &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
        EOT;
        $numeric_string = <<<EOT
        <html>11 &lt; 12. 123 string 4567
        &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
        EOT;
        $quote_char_string = <<<EOT
        <html>&lt; This's a string with quotes:
        "strings in double quote" &amp;
        'strings in single quote' &quot;
        this\line is &#039;single quoted&#039; /with\slashes </html>
        EOT;
        $res_heredoc_strings = array(
          //heredoc strings
          $empty_string,
          $blank_line,
          $multiline_string,
          $diff_whitespaces,
          $numeric_string,
          $quote_char_string
        );
        test("str");
    }
}
debug_print_backtrace();
$b = new A();
$b->dyn = 1;
$arg = new Stdclass();
$arg->name = array();
$tests = array(
    'noon', 'midnight'
);
foreach ($tests as $test) {
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
}
$t = strtotime("2005-12-22 ". $test);
function f_2() {
    php_cli_server_start('foo bar');
    $test = array("A\x00B" => "Hello world");
    debug_zval_dump($test);
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
    printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                        $unexpected_flags, $field->name, $flags_found);
    test([0], [1], 2);
    $db = PDOTest::factory();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
}
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
function f_3() {
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
    var_dump(foo());
    zerofill(6, $link, 'INTEGER');
    $a = "20";
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
    $test = array("A\x00B" => "Hello world");
    var_dump($test);
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $col = imagecolorat($im2, 5, 5);
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    $t->cleanRepair();
    var_dump(sprintf("%.988f", 1.23456789e10));
}
$db = PDOTest::factory();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
function f_4() {
    $references = array();
    debug_zval_dump($references);
    var_dump(count($cert_data['extracerts']));
}
$result = get_declared_classes();
var_dump(array_search('foo', $result));
function f_5() {
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    
    });
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    $offsets = array(20, 21, 22, 53, 54);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    $needle = base64_decode('44CC');
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
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    $tester = new FPM\Tester($cfg);
    $tester->expectLogTerminatingNotices();
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
    restore_exception_handler();
}
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
$b = 'x';
function f_6() {
    $test=array();
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
        $tbl = "test";
        $sql = "DROP TABLE IF EXISTS $tbl";
        $mysqli->query($sql);
    }
    var_dump($http_response_header);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
}
$c("abc");
function f_8() {
    $a = new A();
    $array = [0];
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $res = $stmt->fetchAll();
    for ($i_9 = 0; $i_9 < 10; $i_9++) {
        $curl = curl_init("http://www.google.com");
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
        (new B)->baz();
    }
    $test = array("A\x00B" => "Hello world");
    debug_zval_dump($test);
    $date = new DateTime("2011-05-17T22:14:12");
    $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    var_dump($date->format("D") == $date2->format("D"));
}
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
function f_10() {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    var_dump(count(stat("$d0\\test0.txt")) > 0);
    $count = 1;
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    $ch = curl_init("https://localhost/userpwd");
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
    var_dump($body->lookupNamespaceURI("a"));
    $a = $b = $c = 2;
    set_include_path(__DIR__.'/bug39542:.');
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    var_dump($h1->length);
    $x = new X;
    $x->prop = 1;
    var_dump($x->prop);
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
}
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
