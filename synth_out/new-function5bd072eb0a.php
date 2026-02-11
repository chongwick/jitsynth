<?php
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
try {
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
} catch (Exception $e) {}
if (true) {
    var_dump(pcntl_wexitstatus($status));
}
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
