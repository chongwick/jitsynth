<?php
function f_0() {
    return 0;
}
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$values =  array (
  //Decimal values
  0,
  1,
  12345,
  -12345,

  //Octal values
  02,
  010,
  030071,
  -030071,

  //Hexadecimal values
  0x0,
  0x1,
  0xABCD,
  -0xABCD
);
function f_1() {
    if (true) {
        return str_repeat('a', 1);
    }
    if (true) {
        return "Class A object";
    }
    $a = new DateTime("2009-01-01", null);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
}
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data4'] = 400;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $domd = new DOMDocument();
    $notDefined[$i] = 'test';
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
    $tester->expectLogStartNotices();
    if (true) {
        $threesixty = M_PI * 2.0;
        $var = -PHP_INT_MAX - 1;
        range($var,1,$var);
    }
}
$arg = new Stdclass();
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
$fiber->start();
var_dump($sends1);
