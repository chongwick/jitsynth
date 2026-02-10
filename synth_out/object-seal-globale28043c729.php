<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://t[est@[::1]");
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
