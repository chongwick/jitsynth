<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
function f_0() {
    $obj = new C();
    var_dump($obj);
}
function f_1() {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $count = 1;
    $count++;
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
    $tester
        ->request('', ['SCRIPT_FILENAME' => null])
        ->expectHeader('Status', '404 Not Found')
        ->expectError('Primary script unknown');
}
function f_2() {
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $obj = new C();
    var_dump($obj);
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    foreach( $search_arr as $value ) {
      echo "\n-- Iteration $i --\n";
      /* replace the string in array */
      var_dump( str_replace($value, "FOUND", $search_arr, $count) );
      var_dump( $count );
      $i++;
    }
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
}
function f_3() {
    print_r($str_instead);
    define("TEST",2);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    fwrite($fp, "test");
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $offset3 = PHP_INT_MAX * 16;
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    var_dump(ob_get_contents());
}
$dbh = @pg_connect($conn_str);
var_dump(pg_last_notice($dbh));
test("http://t[est@::1]");
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_binmode($res, ODBC_BINMODE_RETURN);
