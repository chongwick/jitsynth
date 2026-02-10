<?php
$g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
    '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
    'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
    '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
    'b81747c4c447a941f3';
$x = 1;
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
$info = opcache_get_status()['interned_strings_usage'];
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $im = imagecreate(800, 800);
}
$empty_string = <<<EOT
EOT;
public function __construct($callback) {
        $this->callback = $callback;
    }
$this->callback = $callback;
$depth2 = "depth2";
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    );
    if (!$reader->open($fil
    extAttribute();
                echo $reade;
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
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
}
