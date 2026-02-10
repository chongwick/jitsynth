<?php
$lazy = true;
$mem = $lazy ? 0 : 1;
$mem0 = $mem;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
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
    EOT;
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
}
$dt = new DateTime('@1604215800');
$dt->setTimezone(new DateTimeZone('America/Boise'));
