<?php
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
var_dump(tidy_get_body($t));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
printf("Content-Type Default OK" . PHP_EOL);
var_dump(mhash(133, 1086849124, 133));
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
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
setStyleAndThickness($im, $black, 2);
var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
function f_0() {
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $containers = array();
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
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->resume();
function f_1() {
    $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
        '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
        'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
        '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
        'b81747c4c447a941f3';
    $result = get_declared_classes();
    ini_set('display_errors',true);
    $a = new PDO("sqlite::memory:");
    $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
}
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo "1";//22');
function f_2() {
    $iterator = 1;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $timestamp = "2005-11-08T11:22:07+03:00";
        $logOffEvents[] = new LogOffEvent(34568, $timestamp, "SmokeFree");
        class LogOffEvent {
          public $audienceMemberId;
          public $timestamp;
          public $smokeStatus;
          public $callInitiator;
        
          function __construct($audienceMemberId, $timestamp, $smokeStatus) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
            $this->smokeStatus = $smokeStatus;
            $this->callInitiator = "IVR";
          }
        };
        ini_set("session.save_handler","files");
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $total = 10000;
        $halves[0] = $halves[1] = 0;
        $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
        printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
        $ar1 = array("row1" => 2, "row2" => 1);
        $args = array(&$ar1);
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
        printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
        class Foo {
          public static $bar = array(
            FOO => "bar"
            );
        
        }
        $foo = new Foo();
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        var_dump(strlen($phar->getStub()));
        var_dump(scandir(''));
        printf("printf test 20:%16X\n", 170);
        class MySQL_Ext extends mysqli{
            protected $fooData = array();
            private $extData;
        
            public function isEmpty()
            {
                $this->extData[] = 'Bar';
                return empty($this->extData);
            }
        }
        $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
        $isEmpty = $MySQL_Ext->isEmpty();
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
        $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
        
        mkdir($prefix);
        foreach ($
        mkdir($prefix . $d);
        }
        
        $old_cwd = getcwd();
        forea
        _cwd = getcwd();
        for;
        $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
        unlink($tmpFileOut);
    }
}
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
