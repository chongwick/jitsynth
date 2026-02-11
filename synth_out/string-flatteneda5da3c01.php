<?php
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
class DB extends mysqli {

    private function __construct($hostname, $username, $password, $database) {
        var_dump("DB::__construct() called");
    }
}
$style = array();
$i = 0;
$style[$i++] = $color;
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $DB = new DB();
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
}
var_dump('ERR');
