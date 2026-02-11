<?php
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
function f_0() {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    var_dump($foo[0]);
    test('sensitive');
}
function f_1() {
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
    var_dump(sprintf("%.988f", 1.23456789e10));
}
ob_start("test");
something();
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$datefmt->parse('abc');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump(strncmp("test ", "e", -1));
var_dump ( rtrim("rtrim test        ", " ") );
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
ImageFillToBorder($im, 5, 5, $bordercolor, $color);
