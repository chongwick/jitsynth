<?php
function test() {
    $dtor = new class { function __destruct() { throw new Exception; } };
    $a = 1;
    return [0, $a];
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
$date = '7.8.2010';
$unixtime = strtotime($date);
$x = test();
function f_0() {
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                    $trace_file,
                    filesize($trace_file));
    }
}
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
ob_start("test");
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $gen = gen();
    $a = bar($gen);
    public function test(P $sibling) {
            $sibling->common();
        }
    $sibling->common();
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $im = imagecreate(800, 800);
    imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
    $test1 = new B1;
    $test1->test();
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $res = [];
    display($res);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    printf("[009] Cannot run SELECT, [%d] %s\n",
                    mysqli_errno($link), mysqli_error($link));
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump(intlcal_is_weekend(1));
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    $compressed = substr($compressed, 0, strlen($compressed) - 20);
    file_put_contents($fn, $compressed);
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    printf("printf test 9:<%-20s>\n", "bar");
    $eml = __DIR__ . "/signed.eml";
    $empty = "";
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
}
set_error_handler('test_error_handler');
$gen = gen();
$a = bar($gen);
$a->next();
var_dump(array_map(assert(...), [true, true, false]));
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
var_dump($body->lookupNamespaceURI(""));
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $extracert = file_get_contents(__DIR__ . "/cert.crt");
    ob_start(function() {
        declare(ticks=1);
        register_tick_function(
           function() { }
        );
    });
}
