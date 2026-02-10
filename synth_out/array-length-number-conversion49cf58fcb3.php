<?php
function f_0() {
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    $bytes = str_repeat("*", 65536);
    $output = deflate_add(
            $deflator,
            $bytes,
            ZLIB_SYNC_FLUSH
        );
    $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
    var_dump(strncmp("test ", "e", 10));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
}
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->loadHTML($html);
 ($dirs as $d) {
   
dirs as $d) {
;
$zip = new ZipArchive();
$zip->close();
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -1, SEEK_SET));
$fp = fopen(__DIR__."/test2.csv", "r");
fclose($fp);
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
$obj = $res->fetch_object();
var_dump(
    $obj,
    $obj->{42}
);
function t2()
{
    ob_start("test");
    echo "Hello from t2 1 ";
        ob_flush();
        echo "Hello from t2 2 ";
        ob_end_flush();
}
t2();
$ar1 = array("row1" => 2, "row2" => 1);
$args = array($ar1);
var_dump(call_user_func_array("array_multisort", $args));
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://t[est@::1]");
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
