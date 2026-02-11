<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    }
}
var_dump(json_decode('"\ud834"'));
