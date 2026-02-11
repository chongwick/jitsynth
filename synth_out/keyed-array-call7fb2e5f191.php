<?php
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$subject = 'string';
$ar1 = array("row1" => 2, "row2" => 1);
function f_0() {
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
$pass = "qwerty";
test($p12, $pass);
time_nanosleep(0, 1000000000);
$s = "1234567890a";
$i = "010";
var_dump($s[$i], isset($s[$i]));
var_dump(pcntl_wexitstatus($status));
$obj = new C();
var_dump($obj);
$dt = new DateTime('@1604215800');
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
    return "Class A object";
}
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testbin: %s\n", bin2hex($r['testbin']) );
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$c = $b;
var_dump($b, $GLOBALS['b'], $c);
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
set_error_handler('error_handler');
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
