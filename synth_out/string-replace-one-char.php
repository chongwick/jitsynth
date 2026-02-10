<?php
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$args[] = php_ini_loaded_file();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $shm_key = ftok(__FILE__, 'p');
}
function f_1() {
    $this->show();
}
$trace_file = '/tmp/mysqli_debug_phpt.trace';
unlink($trace_file);
var_dump(is_callable(array($this, 'parent::testIsCallable')));
printf("printf test 13:%5d\n", -12);
printf("printf test 5:%-10.2f\n", 2.5);
var_dump((new Exception)->getTrace());
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));
$dom = new DOMDocument;
var_dump(json_decode('{"":"value"}', true));
$dom = new DOMDocument;
printf("printf test 11: 123456789012345678901234567890\n");
$text = 'This is an ‘example’ of using DOM splitText';
$st
rt = 30;
$le
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
ched = $node->splitText($start);
$ma;
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->request(connKeepAlive: true)->expectBody('1');
public function __construct($b)
        {
            global $y;
            $y++;

            $this->foo = self::A + $b;
        }
$this->foo = self::A + $b;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $dt = new DateTime('first day of January 2011');
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$f = function () {};
var_dump(array_map(assert(...), [true, true, false]));
$interval = new DateInterval('P1D');
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $response = array(
        'a' => 'b'
    );
}
$subject = 'string';
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
_dump(chdir($now));
;
class di extends DateInterval {
    public $unit = 1;
}
$I = new di('P10D');
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
