<?php
function f_0() {
    if (true) {
        return 42;
    }
}
$subject = 'mail_bug80706';
function f_1() {
}
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags());
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
function f_2() {
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    try {
        set_exception_handler(function() {
            echo 'Fourth handler' . PHP_EOL;
        });
    } catch (Exception $e) {}
    if (true) {
    }
    $iterator = 1;
    $iterator++;
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
}
$data = [
    "name" => ["family" => AF_INET6, "addr" => "::1"],
    "buffer_size" => 2000,
    "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
            socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
];
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
