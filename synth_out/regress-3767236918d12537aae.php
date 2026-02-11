<?php
class A
{
    public string $prop;
}
class FooBar implements ArrayAccess {
    private $array = array();

    public function offsetExists($index): bool {
        return isset($this->array[$index]);
    }

    public function offsetGet($index): mixed {
        return $this->array[$index];
    }

    public function offsetSet($index, $value): void {
        echo __METHOD__ . "($index, $value)\n";
        $this->array[$index] = $value;
    }

    public function offsetUnset($index): void {
        throw new Exception('FAIL');
        unset($this->array[$index]);
    }

}
$pdo = MySQLPDOTest::factory();
function f_0() {
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $start = memory_get_usage() + 1024;
        $a = new A();
        $a->prop = '';
        $dom = new DOMDocument;
        $tag = $dom->appendChild($dom->createElement("style"));
        $html = simplexml_import_dom($tag);
    }
    return true;
}
function f_2() {
    $zip = new ZipArchive();
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    sprintf('%2147483648$s, %2$s %1$s', "a", "b");
}
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
$foo = new FooBar();
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$object = new StdClass();
ob_end_clean();
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
