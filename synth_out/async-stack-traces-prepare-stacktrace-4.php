<?php
$rounds = [
    'disp', // Correct.
    3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
    null, // No callback. Hopefully this clears everything.
    'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
];
function f_0() {
    return 0;
}
function f_1() {
    try {
        public function setTest($test) {
                $this->test = $test;
            }
        $this->test = $test;
        catch (\TypeError $e) {
        	echo $e->getMessage() . PHP_EOL;
        }
        echo $e->getMessage() . PHP_EOL;
    } catch (Exception $e) {}
    if (true) {
        return "Object";
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
