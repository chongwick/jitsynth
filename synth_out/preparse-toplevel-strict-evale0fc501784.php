<?php
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
$generator = dumpElement();
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileOut2);
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
