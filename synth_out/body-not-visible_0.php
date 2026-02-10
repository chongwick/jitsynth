<?php
$response = ob_get_contents();
try {
    does_not_work();
    var_dump($_a, $_b);
} catch (Exception $e) {}
if (true) {
    $request = <<<REQUEST
GET / HTTP/1.1
Host: $host


REQUEST;
    var_dump(gethostbyname($host));
}
$tester->terminate();
