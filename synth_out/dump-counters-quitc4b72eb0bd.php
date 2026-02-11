<?php
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
if (true) {
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $id = odbc_result($res, "ID");
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
        throw new \Exception('exception handler');
    });
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
}
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
