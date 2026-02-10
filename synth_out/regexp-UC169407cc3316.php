<?php
function test(array... $args) {
    var_dump($args);
}
test([0], [1], 2);
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -32, SEEK_CUR));
$gen = (function() {
    yield from (function() { yield; })();
})();
$fiber = new Fiber(function() use ($gen) {
    $gen->current();
});
$fiber->start();
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@127.0.0.1");
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$root = simplexml_load_string($xml);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$readonly_anon->field = 123;
var_dump($readonly_anon->field);
function a() {
    $a = $b = $c = 2;
    foreach(range(1, 5) as $v) {
        yield $v;
    }
    return;
}
$a = $b = $c = 2;
foreach (a(range(1, 3)) as $a) {
    var_dump($a);
}
var_dump($a);
