<?php
$tester = new FPM\Tester($cfg);
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
$date = '7.8.2010';
$unixtime = strtotime($date);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
     = new DOMDocument('1.0', 'UTF-8');
    $no;
    $array_object = array();
    var_dump( end($array_object) );
}
function f_1() {
    return true;
}
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
    set_exception_handler(null);
}
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
function f_3() {
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    function f($canary) {
        var_dump(yield from g());
    }
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    $canary->value = $fiber;
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    $filename = __DIR__ . '/bug77432.phar';
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    $expected = str_repeat('0', $length - strlen($insert));
    $offsets = array(20, 21, 22, 53, 54);
    $db = MySQLPDOTest::factory();
    return "Object";
}
function f_4() {
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    if (true) {
        $array = array('f' => "first", "s" => 'second', 1, 2.222);
        $temp_array = $array;
    }
    if (true) {
        $ftp = ftp_connect('127.0.0.1', $port);
    }
    if (true) {
        $reflector = new ReflectionClass(C::class);
    }
    if (true) {
        $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
        $attr = $root->attributes('urn:x');
    }
    return '';
}
function f_5() {
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    $this->timestamp = $timestamp;
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        class Foo {
          public static $bar = array(
            FOO => "bar"
            );
        
        }
        $foo = new Foo();
        $lazy = true;
        $tempnum = 12345;
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            $host = curl_cli_server_start();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
            abstract class abstractClass
            {
              abstract protected function getClassName();
              public function printClassName () {
                echo $this->getClassName() . "\n";
              }
            }
            class concreteClass extends abstractClass
            {
              protected function getClassName() {
                return "concreteClass";
              }
            }
            $concreteClass_object = new concreteClass();
        }
        $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
        var_dump($headers2['Title']);
        $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $style = array();
            $i = 0;
            $style[$i++] = IMG_COLOR_TRANSPARENT;
            if (true) {
                function Test($param) {
                    global $g;
                    $g = $param->strA."\n".$param->strB."\n";
                    return $g;
                }
                $g = $param->strA."\n".$param->strB."\n";
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
            $obj = new testObject();
            $obj2 = unserialize(serialize($obj));
            if (true) {
                $subject = 'mail_bug80706';
            }
        }
        $link = mysqli_init();
        $im = ImageCreateTrueColor(10, 10);
        $a = 4;
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            ob_clean();
            class TestSoapClient extends SoapClient
            {
                public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
                {
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
            }
            $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
            print_r($client->GetExpressCheckoutDetails());
            $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
                '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
                '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
                '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
                '996def90090303b7ad';
            $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
            $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
                '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
                'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
                '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
                'b81747c4c447a941f3';
            var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
        }
    }
}
function f_10() {
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
}
function f_11() {
    return "Object1";
}
function f_12() {
    return true;
}
