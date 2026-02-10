<?php
function f_0() {
    return "key";
}
$a = new DateTime("2009-01-01", null);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
}
$tz_aus = new DateTimeZone('Australia/Sydney');
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
}
$loop_counter = 1;
$loop_counter++;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $eml = __DIR__ . "/signed.eml";
    $empty = "";
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $str = <<<EOD
    us
    ing heredoc string
    EOD;
    var_dump( rtrim($str, "ing") );
}
