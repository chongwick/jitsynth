<?php
function f_0() {
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    class A {
        public $a;
    }
    $b = new A();
    $b->dyn = 1;
    while (true) {
        break;  // avoid infinite loop
        $iterator = 1;
        $iterator++;
        if (true) {
        }
    }
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
}
function foo() {
    $x = 1.0;
    $x += 0;
    return ++$x; // mem -> reg, reg
}
var_dump(foo());
function f_1() {
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
    while (true) {
        break;  // avoid infinite loop
        $loop_counter = 1;
        $loop_counter++;
        if (true) {
        }
    }
    $arrays = array (
      array( 0 ),
      range(1, 100 ),
      range('a', 'z', 2 ),
      array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
      array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
      array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
      array(1.0005, 2.000000, -3.000000, -4.9999999 ),
      array(true, false),
      array("PHP", "Web2.0", "SOA"),
      array(1, array() ),
      array(1, 2, "" ),
      array(" "),
      array(2147483647, 2147483648, -2147483647, -2147483648 ),
      array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
      array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
    );
    foreach ($arrays as $sub_array){
      echo "-- Iteration $counter --\n";
      var_dump( end($sub_array) );
      /* ensure that internal pointer is moved to last element */
      var_dump( current($sub_array) );
      $counter++;
    }
    var_dump( current($sub_array) );
}
$tests = array(
    'noon', 'midnight'
);
foreach ($tests as $test) {
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
}
$t = strtotime("2005-12-22 ". $test);
printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
function f_2() {
    $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
    $batch_file_content = <<<EOT
    @echo off
    powershell -Command "Write-Output '%0%'"
    powershell -Command "Write-Output '%1%'"
    EOT;
    while (true) {
        break;  // avoid infinite loop
        $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
        while (true) {
            break;  // avoid infinite loop
            $test->a++;
            ++$test->a;
            if (true) {
            }
            if (true) {
            }
        }
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
    $tester->expectLogStartNotices();
}
var_dump(__METHOD__);
function test(array... $args) {
    var_dump($args);
}
test();
