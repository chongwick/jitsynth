<?php
$dest = __DIR__ . "/bug40228";
$this->server->handle($request);
$a->test("test");
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
var_dump(sprintf("%%", 1.23456789e10));
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
testLastInsertId($db);
$stmt->close();
var_dump ( rtrim("rtrim test        ", true) );
printf("%s: %s\n", $e::class, $e->getMessage());
$callable($nodes);
var_dump(soundex("Gauss"));
print_r($res);
rewind($fp);
$tester->terminate();
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump(new Test);
var_dump($_SESSION);
