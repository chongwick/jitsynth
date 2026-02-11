<?php
function test(int $nr) {
    for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
}
class A {
    public $a;
}
class Box {
    public ?Test $value;
}
class di extends DateInterval {
    public $unit = 1;
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
function gen() {
    yield 0;
    yield from gen();
}
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
$conn = pg_connect($conn_str);
$dom = new DOMDocument;
$dom->strictErrorChecking = false;
function f_0() {
    test(1);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    return '';
}
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$heredoc_needle = <<<EOD
^^&*(
EOD;
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
$b = new A();
$b->dyn = 1;
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$y = 0;
$b = 1;
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
$date = new DateTime("28-July-2008");
$other = new DateTime("31-July-2008");
$diff = date_diff($date, $other);
$priv = file_get_contents(__DIR__ . "/private.crt");
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
var_dump($namespaceless->lookupNamespaceURI(NULL));
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
ob_end_clean();
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
$a->foo = 5;
var_dump($sends1);
$GLOBALS["obj"] = 24;
$array1 = array(1, 2);
var_dump(count($cert_data['extracerts']));
$length = 3;
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
$found = false;
global $box;
$box = new Box();
test($box);
$cert = file_get_contents(__DIR__ . "/public.crt");
$heredoc = <<<EOT
Hello world
EOT;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
$I = new di('P10D');
print_r($I);
$sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
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
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
$gen = gen();
var_dump(A::fromArray(['a' => 'foo']));
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
ini_set('mysqlnd.fetch_data_copy', false);
$a = Array();
$list = new SplDoublyLinkedList();
$list->rewind();
$host = PHP_CLI_SERVER_HOSTNAME;
define('OBJECT_COUNT', 10000);
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileOut);
date_default_timezone_set('Europe/Kiev');
