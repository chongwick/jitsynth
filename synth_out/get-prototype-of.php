<?php
function f_0() {
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
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
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
var_dump($value);
function f_1() {
}
$f = function () {};
$dir_handle = opendir( __DIR__ );
closedir( $dir_handle );
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
var_dump(@$obj->dynamic++);
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->parse('abc');
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$tag->append("foo");
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
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
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
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
$tester->start();
$filename = "bug51997.bz2";
unlink($filename);
$lazy = true;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
}
$reflector = new ReflectionClass(C::class);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    $db = PDOTest::factory();
    $db->beginTransaction();
}
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
printf("printf test 20:%16X\n", 170);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
