<?php
$a = "lest";
$a[0] = "f";
try {
    class DB extends mysqli {
    
        private function __construct($hostname, $username, $password, $database) {
            var_dump("DB::__construct() called");
        }
    }
    $DB = new DB();
} catch (Exception $e) {}
if (true) {
    spl_autoload_register(function ($name) {
    });
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data1'] = 100;
}
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo 3; // 4 ?>5');
