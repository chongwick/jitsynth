<?php
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
function callback(&$a, &$b, $c) {
        $b = 1;
    }
class A
{
    public function & __get($name)
    {
        return $this->test;
    }
}
class B extends A
{
    private $test;
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
class C extends stdClass {
    public int $a;
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
$c = "assert";
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$html = simplexml_import_dom($tag);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
$row = pg_fetch_row($res, 0);
$host = PHP_CLI_SERVER_HOSTNAME;
spl_autoload_register(function ($name) {
    if ($name == "B") {
        eval ("abstract class B extends A { }");
    } else if ($name == "A") {
        eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
    } else if ($name == "T") {
        eval ("trait T { public function __construct() { } }");
    }
    return TRUE;
});
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
printf("[002] [%d] %s\n", $link->errno, $link->error);
var_dump(soundex("Hilbert"));
function f_0() {
    $fn = function() { return static::name(); };
    try {
        register_shutdown_function(function (): void {
            foreach (get_resources() as $res) {
                if (get_resource_type($res) === 'persistent stream') {
                    echo "ERROR: persistent stream not closed\n";
                    return;
                }
            }
            echo "OK: persistent stream closed\n";
        });
    } catch (Exception $e) {}
    if (true) {
        $strB = 'test & test';
        mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
    }
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
    function f_1() {
        $b = 1;
        $a = $b = $c = 0;
        try {
            bar();
        } catch (Exception $e) {}
        if (true) {
            $b = new B;
            var_dump(json_decode('"\ud834"'));
        }
        var_dump(range(1, 3, -1));
        function f_2() {
            $db = getDbConnection();
            $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
            try {
                ob_end_flush();
            } catch (Exception $e) {}
            if (true) {
                $var = '';
                $dest = __DIR__ . "/bug40228";
                rmdir($dest);
            }
            var_dump($obj);
            function f_3() {
                $halves[0] = $halves[1] = 0;
                $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
                $halves[0] = $halves[1] = 0;
                try {
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
                } catch (Exception $e) {}
                if (true) {
                    $arr  = array("test");
                    (function() {
                    	try {
                    		foo(); // Error
                    	} catch (\Exception $e) {
                    		var_dump($e);
                    	} catch (\ParseError $e) {
                    		var_dump($e);
                    	}
                    })();
                }
                $conn = odbc_connect($dsn, $user, $pass);
                $res = odbc_exec($conn, "SELECT * FROM bug80147");
                var_dump(odbc_result($res, 'whatever'));
            }
            $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
            unlink($tmpFileOut);
        }
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->resetAsLazyProxy($obj, function ($obj) {
            });
    }
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
$code = null;
$err = null;
var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
