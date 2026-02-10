<?php
$extracert = file_get_contents(__DIR__ . "/cert.crt");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $test->a++;
    ++$test->a;
}
function test($x) {
    switch ($x->y) {
        default:
            throw new Exception;
        case 'foobar':
            return new stdClass();
            break;
    }
}
$x = (object)['y' => 'foobar'];
var_dump(test($x));
$dir = opendir('foo://bar');
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $counter = 1;
    $counter++;
}
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
