<?php
function foo(): never {
    if (false) {
        throw new Exception('bad');
    }
}
foo();
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
