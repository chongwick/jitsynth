<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
function test(array... $args) {
    var_dump($args);
}
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
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
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        foreach ([false, true] as $emulate) {
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
        
            try {
                $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
                $stmt->execute();
            } catch (PDOException $e) {
                var_dump('ERR');
            }
        
            $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
            $stmt->execute();
        
            var_dump($stmt->fetch());
        }
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    }
}
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            $canary = new Canary(null);
            $iterable = f($canary);
            $fiber = new Fiber(function () use ($iterable, $canary) {
                var_dump($canary, $iterable->current());
                $f = $iterable->next(...);
                $f();
                var_dump("not executed");
            });
            $fiber->start();
        }
    }
}
$dsn = ini_get('pdo.dsn.mysql');
$g = 'hi';
function f_5() {
    return "Object";
}
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
$object = new StdClass();
$object->a = str_repeat("a", 2);
$loop_counter = 1;
$fp = php_cli_server_connect();
$r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = PHP_INT_MAX * 16;
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
test();
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec
;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgtable     : %s\n", $field->orgtable);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
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
$tester->close();
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
define("TEST",2);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
function f_6() {
    return $x;
}
function f_7() {
    return str_repeat('a', 1);
}
function f_8() {
    return "Class A object";
}
$i=0;
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
$offset = 'teststring';
$ref = &$offset;
list($value) = yield;
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$length = $meta->length;
$expected = str_repeat('0', $length - strlen($insert));
$a = 'ok';
C::$p++;
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$data_comp_func = 'compare_function';
ob_clean();
public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
public function offsetGet($x): mixed { var_dump($x); return 42; }
var_dump($x);
printf("printf test 3:%f\n", 10.0/3);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_VERBOSE, true);
function f_9() {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        for ($i_11 = 0; $i_11 < 10; $i_11++) {
            $fp = fopen(__FILE__, "r");
            try {
                $fn = "bug71263.bz2";
                $r = fopen($fn, "r");
            } catch (Exception $e) {}
            if (true) {
                $columns = array(
                        'INT DEFAULT NULL' => 'NUM',
                        'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
                        'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
                        'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
                        'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
                        'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
                        'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
                        'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
                        'CHAR(1) DEFAULT NULL'	=> '',
                        'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
                        'VARBINARY(127) DEFAULT NULL' => 'BINARY',
                        'BLOB'	=> 'BLOB BINARY',
                        'TINYBLOB'	=> 'BLOB BINARY',
                        'MEDIUMBLOB'	=> 'BLOB BINARY',
                        'LONGBLOB'	=> 'BLOB BINARY',
                        'TEXT'	=> 'BLOB',
                        'TINYTEXT'	=> 'BLOB',
                        'MEDIUMTEXT'	=> 'BLOB',
                        'LONGTEXT'	=> 'BLOB',
                        'SET("one", "two")'	=> 'SET',
                        'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
                        'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
                        'ENUM("one", "two")'	=> 'ENUM',
                        'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
                        'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
                        'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
                        'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
                        'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
                        'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
                        'BIT' => 'UNSIGNED',
                        'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
                    );
            }
            $obj = new testObject();
            $obj2 = unserialize(serialize($obj));
            var_dump($obj2->getTest());
        }
    }
}
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
