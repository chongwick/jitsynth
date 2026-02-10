<?php
$res = [];
$res[] = $re;
$rounds = [
    'disp', // Correct.
    3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
    null, // No callback. Hopefully this clears everything.
    'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
];
function f_0() {
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
}
function f_1() {
    return "testObject";
}
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    }
}
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
$fiber->start();
