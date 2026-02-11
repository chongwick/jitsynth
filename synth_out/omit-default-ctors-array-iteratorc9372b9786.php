<?php
$code = null;
$err = null;
var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
