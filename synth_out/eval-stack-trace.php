<?php
$meta_res = $stmt->result_metadata();
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
[$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
$a = new DateTime("2009-01-01", null);
$key_compare_func = 'compare_function';
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data4'] = 400;
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
$heredoc = <<<EOT
Hello world
EOT;
function f_0() {
    $arg = new Stdclass();
    print_r($arg);
}
try {
    $browser=get_browser(NULL, true);
    print_r($browser);
} catch (Exception $e) {}
if (true) {
    class di extends DateInterval {
        public $unit = 1;
    }
    $I = new di('P10D');
    printf("printf test 3:%f\n", 10.0/3);
    $im = imagecreate(800, 800);
    imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
    test('sensitive');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
    var_dump($x);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    test('Ghost', $obj);
}
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
try {
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
} catch (Exception $e) {}
if (true) {
    $utfl = __DIR__ . "/sni_server_uk.pem";
    sprintf('%2147483648$s, %2$s %1$s', "a", "b");
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
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $rcrt = openssl_x509_read($cert);
    var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
    var_dump(sprintf("%.988f", 1.23456789e10));
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
}
class Foo {
  public static $bar = array(
    FOO => "bar"
    );

}
$foo = new Foo();
try {
    var_dump( range('A', 'H', 0.0) );
} catch (Exception $e) {}
if (true) {
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test@127.0.0.1");
    $arg = new Stdclass();
    print_r($arg);
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
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
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 1);
    catch (Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
try {
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
} catch (Exception $e) {}
if (true) {
    $date = '7.8.2010';
    $list = new SplDoublyLinkedList();
    $list->next();
    $a[10] = "42";
    var_dump($a["10"], isset($a["10"]));
    define('OBJECT_COUNT', 10000);
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
}
