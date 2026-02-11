<?php
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
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
function foo() {
  var_dump("hello");
}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
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
class Box {
    public ?Test $value;
}
function test($box) {
    var_dump($box->value = new Test);
}
function f_0() {
    printf("printf test 8:<%20s>\n", "foo");
    $host = curl_cli_server_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    $a = 1;
    $found_flags = $unexpected_flags = '';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        $pkey = "-----BEGIN PRIVATE KEY-----
        MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
        1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
        42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
        un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
        JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
        8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
        kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
        sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
        vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
        kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
        7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
        mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
        4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
        Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
        +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
        cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
        0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
        6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
        07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
        H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
        MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
        +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
        VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
        mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
        RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
        2WR7c6FhRCLxG0DObEOfiO0=
        -----END PRIVATE KEY-----
        ";
    }
    var_dump($row[0]);
    $assoc_array = array ('one' => 1, 'two' => 2);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $a = &$value->a;
    }
    set_error_handler('error_handler');
    $style = array();
    $i = 0;
    $style[$i++] = $color;
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $loop_counter = 1;
        $arr = array(
        0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
        0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
        0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
        0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
        0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
        0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
        0x2020 => array(0x86, "DAGGER"),
        0x2021 => array(0x87, "DOUBLE DAGGER"),
        0x20AC => array(0x88, "EURO SIGN"),
        0x2030 => array(0x89, "PER MILLE SIGN"),
        0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
        0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
        0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
        0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
        0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
        0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
        0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
        0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
        0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
        0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
        0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
        0x2022 => array(0x95, "BULLET"),
        0x2013 => array(0x96, "EN DASH"),
        0x2014 => array(0x97, "EM DASH"),
        //0x98	      	#UNDEFINED
        0x2122 => array(0x99, "TRADE MARK SIGN"),
        0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
        0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
        0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
        0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
        0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
        0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
        0x00A0 => array(0xA0, "NO-BREAK SPACE"),
        0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
        0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
        0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
        0x00A4 => array(0xA4, "CURRENCY SIGN"),
        0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
        0x00A6 => array(0xA6, "BROKEN BAR"),
        0x00A7 => array(0xA7, "SECTION SIGN"),
        0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
        0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
        0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
        0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
        0x00AC => array(0xAC, "NOT SIGN"),
        0x00AD => array(0xAD, "SOFT HYPHEN"),
        0x00AE => array(0xAE, "REGISTERED SIGN"),
        0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
        0x00B0 => array(0xB0, "DEGREE SIGN"),
        0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
        0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
        0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
        0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
        0x00B5 => array(0xB5, "MICRO SIGN"),
        0x00B6 => array(0xB6, "PILCROW SIGN"),
        0x00B7 => array(0xB7, "MIDDLE DOT"),
        0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
        0x2116 => array(0xB9, "NUMERO SIGN"),
        0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
        0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
        0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
        0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
        0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
        0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
        0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
        0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
        0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
        0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
        0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
        0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
        0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
        0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
        0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
        0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
        0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
        0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
        0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
        0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
        0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
        0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
        0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
        0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
        0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
        0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
        0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
        0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
        0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
        0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
        0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
        0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
        0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
        0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
        0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
        0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
        0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
        0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
        0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
        0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
        0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
        0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
        0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
        0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
        0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
        0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
        0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
        0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
        0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
        0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
        0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
        0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
        0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
        0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
        0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
        0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
        0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
        0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
        0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
        0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
        0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
        0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
        0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
        0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
        0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
        0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
        0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
        0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
        0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
        0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
        );
    }
    foo();
    $obj = new testObject();
    $obj2 = unserialize(serialize($obj));
    var_dump($obj2->getTest());
    $inner = 'r:2;';
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    }
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
}
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
ob_end_flush();
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
global $box;
$box = new Box();
test($box);
