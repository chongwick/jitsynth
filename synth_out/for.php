<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    if (true) {
    }
}
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
