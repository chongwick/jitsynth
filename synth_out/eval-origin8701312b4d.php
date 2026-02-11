<?php
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$a = new A();
$a = new A();
$a->prop = new B();
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$start = memory_get_usage() + 1024;
$i = 0;
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
);
    var_dump($d == get_base;
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
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
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    $assoc_array = array ('one' => 1, 'two' => 2);
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
}
