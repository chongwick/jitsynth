<?php
$cfg['main'] = <<<EOT
[global]
error_log = {{FILE:LOG}}
log_level = notice
include = {{INCLUDE:CONF}}
EOT;
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$argv = null;
var_dump($body->lookupNamespaceURI(""));
test();
$date = new DateTime("28-July-2008");
$stmt = $db->prepare("CALL testSp()");
$eml = __DIR__ . "/signed.eml";
function f_0() {
    var_dump( array_intersect($arr1, $arr2, $arr1) );
    return $a;
}
function f_1() {
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    return "Object";
}
$this->myField = 1234;
$to = "specials";
$stmt = $db->query($sql);
$container = false;
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
$reflector = new ReflectionClass(C::class);
$foo->bar[] = 'bar';
test("http://t[est@[::1]");
printf("%s: %s\n", $e::class, $e->getMessage());
$date = '7.8.2010';
$args = array(&$ar1);
$anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
var_dump(openssl_x509_parse($pem_cert));
$ago = new DateTime('2018-11-03 11:34:20.000000');
$code = <<<'PHP'
/* Receive */
$content = trim(file_get_contents("php://input")) . PHP_EOL;
PHP;
$logOffEvents[] = new LogOffEvent(34567, $timestamp, "Smoked");
$t = tidy_parse_string($input);
test('<?php echo "1";//2');
bar('first try');
$now = new DateTime('2018-11-03 11:34:20.781751');
$generator = dumpElement();
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
var_dump( gmdate($value) );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
$blank_line = <<<EOT

EOT;
$length = $meta->length;
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
unlink($filename);
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
$PHP_SELF = 1;
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve;
$priorityQueue->insert("c", 0);
var_dump($priorityQueue->getExtractFlags());
$date2 = new DateTime("Sat 19 November 2011");
$this->priv_member = $val;
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
$res = [];
php_cli_server_start('foo bar');
var_dump($obj);
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
