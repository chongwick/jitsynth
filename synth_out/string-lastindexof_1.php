<?php
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$ffi = FFI::cdef($header, ffi_get_php_dll_name());
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$arg->name = array();
$cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
var_dump($prefixed->lookupNamespaceURI(NULL));
var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
var_dump($prefixed->lookupNamespaceURI(""));
display($res);
mysqli_fetch_field($res);
var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
var_dump( is_array ($type) );
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
var_dump($dom->getElementById('x')?->nodeName);
var_dump(json_decode('[]', false, 0x100000000));
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
var_dump(file_get_contents($uri));
var_dump($oIntlDateFormatter->getTimeZone()->getID());
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
printf("printf test 2:%d\n", 42);
$t->test();
var_dump($obj);
$DB = new DB();
$array_object = array();
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
$prop->setRawValue($a, 1);
var_dump($x);
var_dump(sin($twoseventy));
var_dump($im);
st1.txt");

var_dump(cou;
var_dump($shm_id1);
$context = stream_context_create($arr);
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
var_dump(strncasecmp("test ", "E", 10));
var_dump(ftp_mkdir($ftp, 'CVS'));
test(2);
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $argv = null;
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
}
$a = new A();
var_dump($readonly_anon->field);
pcntl_wait($status);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
