<?php
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
function f_0() {
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $ar1 = array(1, 2);
        $thisdir = __DIR__;
        $userMessage = "'user' directive is ignored when FPM is not running as root";
    }
    return new Exception;
}
function f_2() {
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    mt_srand(1234567890);
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
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
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$col = imagecolorat($im2, 5, 5);
$color = imagecolorsforindex($im2, $col);
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
$tester->close();
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
bzclose($bz);
