<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$args[] = "-c";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $empty_webp = __DIR__ . "/gh13774.webp";
    $var = 10;
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    range(0, pow(2.0, 100000000));
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    var_dump($data);
    openssl_error_string();
    $im = ImageCreateTrueColor(10, 10);
    imagealphablending($im, true);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    var_dump($i=1);
    var_dump($obj);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $obj = new C();
    var_dump($obj);
    $document = new \DOMDocument();
    var_dump($document->saveHTML());
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
}
