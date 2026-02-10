<?php
function f_0() {
    return new Exception;
}
curl_setopt($ch, CURLOPT_PASSWORD, null);
$tester
    ->request('', ['SCRIPT_FILENAME' => null])
    ->expectHeader('Status', '404 Not Found')
    ->expectError('Primary script unknown');
session_decode($data);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$a->TestFunc();
register_shutdown_function('timE');
ob_start();
var_dump(strncasecmp("test ", "E", 10));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
var_dump(new FooBar);
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
sprintf('%3$s, %2$s %1$s', "a", "b");
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
byRef(C[0]);
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
var_dump(preg_replace_callback_array([], []));
var_dump(fseek($fp, -32, SEEK_CUR));
var_dump( array_multisort($ar1, $value) );
clearstatcache();
var_dump( strftime($value, $timestamp) );
var_dump(substr($hash, -1, 1) !== "\0");
var_dump($dom->getElementById('x')?->nodeName);
does_not_work();
$ai->seek(0);
var_dump(unserialize(serialize($obj)));
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
var_dump(openssl_pkcs7_verify($eml, 0));
var_dump($obj->a);
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
printf("printf test 16:%x\n", 170);
