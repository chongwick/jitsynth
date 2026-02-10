<?php
function f_0() {
    $obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
    $file = __DIR__ . "/bug71127.inc";
    printf("Decimals     : %d\n", $field->decimals);
    $res = $mysqli->query('SELECT 42');
    $nodes = $xml->a->b;
    bar('first try');
}
imagealphablending($im, true);
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
var_dump($org_a, $org_b);
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
$infile));
?>;
printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
test('Ghost', $obj);
var_dump($value);
time_nanosleep(0, 1000000000);
var_dump(ob_get_contents());
var_dump($array[$a]);
$tester->expectLogNotice($userMessage, 'eeee');
var_dump(call_user_func_array("array_multisort", $args));
var_dump($im);
var_dump($d);
var_dump($initialRequest ? $x : $y);
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
var_dump($dom->lookupNamespaceURI("a"));
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
