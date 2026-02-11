<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
function f_0() {
    $reflector = new ReflectionClass(C::class);
    $reflector->initializeLazyObject($obj);
    $responses = array(
        "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
        . "Location: /try-again\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "0\r\n\r\n",
        "data://text/plain,HTTP/1.1 200 Ok\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "4\r\n1234\r\n0\r\n\r\n",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $browser=get_browser(NULL, true);
    $fp = tmpfile();
    rewind($fp);
}
function f_1() {
    $x[""][] = 1;
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    rmdir($prefix);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        register_shutdown_function(function () {
            echo "register_shutdown_function()\n";
            throw new \Exception('shutdown');
        });
    }
    return true;
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
