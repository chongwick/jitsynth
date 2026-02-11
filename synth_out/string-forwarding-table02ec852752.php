<?php
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}
class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

  public function __destruct() {
    echo 'Destr' ."\n";
  }

}
class foo1
{
  function __toString() {
    return "Object1";
  }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$T =new Test(throw_exc());
$iterator = 1;
$object2 = new foo1();
$inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
test("http://test@127.0.0.1");
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->next();
$x = match (true) {};
var_dump($obj->a);
$test = array("A\x00B" => "Hello world");
var_dump($test);
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$cert = "file://" . __DIR__ . "/cert.crt";
$rcrt = openssl_x509_read($cert);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $db = PDOTest::factory();
    $empty_string = <<<EOT
    EOT;
}
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
$data = [
    Test::COURSES_ADMIN,
    Test::COURSES_REPORTING_ACCESS,
    Test::BUNDLES_ADMIN,
    Test::USERS_ADMIN,
    Test::B2B_DASHBOARD_ACCESS,
    Test::B2B_DASHBOARD_ACCESS,
    Test::INSTRUCTORS_ADMIN,
    &$instructorsAdmin,
    Test::COUPONS_ADMIN,
    Test::AUTHENTICATED,
];
$data = array_unique($data, flags: SORT_REGULAR);
$im1 = imagecreatetruecolor(10,100);
$version = mysqli_get_server_version($link);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
var_dump ( rtrim("rtrim test   \t\0 ") );
$obj = new Test;
var_dump($obj);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
try {
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          'The ISO 8601:1988 week number' => "%V",
          'Weekday as decimal' => "%u",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmstrftime($value) );
          var_dump( gmstrftime($value, $timestamp) );
    }
    var_dump( gmstrftime($value, $timestamp) );
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
} catch (Exception $e) {}
if (true) {
}
call_user_func('bar','second try');
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
var_dump($value);
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
