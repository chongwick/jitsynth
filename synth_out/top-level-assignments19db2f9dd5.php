<?php
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
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class Foo {
  public $bar = "bat";
}
class C {
    public int $a;
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
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
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
$string = str_repeat("A", 1024);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$x = new X;
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
$fp = php_cli_server_connect();
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
mysqli_fetch_field($res);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$r = new ReflectionClass('Test2');
var_dump($r->getStaticProperties());
$err = null;
$str = <<<EOD
us
ing heredoc string
EOD;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
foreach ($offsets as $dimension) {
    $container = false;
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";

    include $var_dim_filename;
    $varOutput = ob_get_contents();
    ob_clean();
    $varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );

    if (
        !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
        && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
    ) {
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
        ++$failuresNb;
        $failures[] = $error;
    }
    ++$testCasesTotal;
}
$error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
$fp = fopen(__DIR__."/test2.csv", "r");
fclose($fp);
$test=array();
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
function f_0() {
    return 'printer';
}
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$after = memory_get_usage();
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$length = $meta->length;
$o = new TrampolineTest();
$foo = new Foo;
$baz = (float)$foo;
var_dump($baz);
$dom = new DOMDocument('1.0', 'UTF-8');
$initialRequest = false;
$dom = new DOMDocument;
$wrong = "wrong";
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago, true);
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
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
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$obj = new C();
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
$ch = curl_init();
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
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
touch("$d0\\test0.txt");
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->seek(0);
printf("printf test 1:%s\n", "simple string");
$a = new A();
$a->test(new C());
ini_set('mysqlnd.fetch_data_copy', false);
$thirty = M_PI / 6.0;
var_dump(sin($thirty));
zerofill(8, $link, 'FLOAT');
function f_1() {
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $a = [1,2,3];
    $i = 1;
    $k = 2 * $i;
    $a[$k] = $i;
}
$time = '2000-01-01 00:00:00.000000';
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
$immutable = \DateTimeImmutable::createFromInterface($mutable);
$heredoc = <<<EOT
Hello world
EOT;
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$child = new ChildClass();
phpinfo(INFO_VARIABLES);
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$a = new A;
$a->foo = $x;
$heredoc = <<<EOT
hello world
EOT;
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
zerofill(10, $link, 'DOUBLE PRECISION');
$sh = new SessionHandler;
$sh->write("foo", "bar");
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
