<?php
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
function gen() {
    yield 0;
    yield from gen();
}
class Box {
    public ?Test $value;
}
function test($box) {
    var_dump($box->value = new Test);
}
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
$a = new B;
$date2 = new DateTime("Fri 19 November 2011");
$heredoc = <<<EOT
hello world
EOT;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $gen = gen();
    var_dump(get_class_vars(C::class));
}
function f_1() {
    return 0;
}
$tz1 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
    global $box;
    $box = new Box();
    test($box);
}
$gen = gen();
function f_3() {
    $child = new ChildClass();
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $a = new A();
    $sh = new SessionHandler;
    $cfg['poolTemplate'] = <<<EOT
    [%name%]
    listen = {{ADDR[%name%]}}
    user = foo
    pm = ondemand
    pm.max_children = 5
    EOT;
    $version = mysqli_get_server_version($link);
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    $found_flags = $unexpected_flags = '';
    foreach ($flags as $code => $name) {
                if ($reported_flags >= $code) {
                    $reported_flags -= $code;
                    $found_flags .= $name . ' ';
                    if (stristr($expected_flags, $name)) {
                        $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                    } else {
                        $unexpected_flags .= $name . ' ';
                    }
                }
            }
    $found_flags .= $name . ' ';
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    $unexpected_flags .= $name . ' ';
    return array($expected_flags, $unexpected_flags, $found_flags);
}
function f_4() {
    $reflector = new ReflectionClass(C::class);
    if (true) {
        $a = test();
    }
    if (true) {
        $f_base = "67647私はガラスを食べられます.mov";
    }
    if (true) {
        $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
        $reader = XMLReader::fromUri($filename);
    }
    if (true) {
        $a = new B;
    }
    return 'A';
}
function f_5() {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $b = 'ok';
    $_b = $b;
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
        $plain = "The quick brown fox jumps over the lazy dog.";
        $compressed = (string) bzcompress($plain);
        $compressed[strlen($compressed) - 15] = 'X';
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            $body = $dom->getElementsByTagName("body")[0];
            var_dump($body->lookupNamespaceURI(NULL));
            $loop_counter = 1;
        }
        $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
        var_dump($x);
        $str = 'Hello World';
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $test = array(
              'a' => 1,
              'b' => 2,
              'c' => 3,
              'd' => 4,
            );
            foreach($test as $kk => $vv) {
                    echo $test[$kk];
                    if ($kk == $k) $test[$kk] = 0;
                }
            $test[$kk] = 0;
            if (true) {
                $str = <<<EOD
                us
                ing heredoc string
                EOD;
            }
            $ago = new DateTime('2018-11-03 11:34:20.000000');
            if (true) {
                $sert = "file://" . __DIR__ . "/san-cert.pem";
            }
        }
        $date = '7.8.2010';
        $unixtime = strtotime($date);
        $dsn = ini_get('pdo.dsn.mysql');
        $reflector = new ReflectionClass(C::class);
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            $sixty = M_PI / 3.0;
            var_dump(sin($sixty));
            $fp = fopen('php://input', 'r+');
            var_dump(fseek($fp, -1, SEEK_SET));
            $flags = array(
                    MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                    MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                    MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                    MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                    MYSQLI_BLOB_FLAG => 'BLOB',
                    MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                    MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                    MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                    MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                    MYSQLI_SET_FLAG	=> 'SET',
                    MYSQLI_NUM_FLAG => 'NUM',
                    MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                    // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                    (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                    (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                    (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                    // MYSQLI_BINCMP_FLAG
                );
            $field = mysqli_fetch_field_direct($res, 1);
            $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
            printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                                $missing_flags, $field->name, $flags_found);
        }
    }
}
function f_10() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    set_error_handler(function($_, $m) { throw new Exception($m); });
}
function f_11() {
    return true;
}
function f_12() {
    return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
}
