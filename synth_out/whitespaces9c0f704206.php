<?php
$timestamp = "2005-11-08T11:22:07+03:00";
function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
$this->audienceMemberId = $audienceMemberId;
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
$str_arr = array(
  //double quoted strings
  "%",
  "#$*",
  "text & @()",

  //single quoted strings
  '%',
  '#$*',
  'text & @()',

  //heredoc string
  $heredoc_str
);
for($index = 0; $index < count($str_arr); $index++) {
  echo "-- Iteration $count --\n";

  $str = $str_arr[$index];  //getting the array element in 'str' variable

  //strtr() call in three args syntax form
  var_dump( strtr($str, $from, $to) );

  //strtr() call in two args syntax form
  var_dump( strtr($str, $replace_pairs) );

  $count++;
}
$str = $str_arr[$index];
$im = imagecreate(10,10);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
function f_0() {
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    public function offsetGet($index): mixed {
            return $this->array[$index];
        }
    return $this->array[$index];
}
function f_1() {
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    $thisdir = __DIR__;
    $filename = $thisdir . "/bug47667.zip";
    A::$a = 'A new';
    $bar = new DateTime();
    if (true) {
        function test($s) {
          echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
        }
        test('<?php echo 3; // 4 ?>5');
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
        $date2 = new DateTime("Sat 19 November 2011");
        var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    }
    if (!true) {
        var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $rcrt = openssl_x509_read($cert);
        var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
    }
}
function f_2() {
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    if (true) {
        var_dump($sends1);
    }
    if (!true) {
        $test = function (#[SensitiveParameter] $sensitive)
        {
            debug_print_backtrace();
            var_dump(debug_backtrace());
            var_dump((new Exception)->getTrace());
        };
        $test('sensitive');
    }
}
function f_3() {
    if (true) {
        return "Class A object";
    }
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    if (true) {
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    }
    if (!true) {
        var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
    }
}
function f_4() {
    if (true) {
        return [(array)$this];
    }
    $depth0 = "depth02";
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->stopBuffering();
}
function f_5() {
    if (true) {
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
    $rc = new ReflectionClass(B::class);
    if (true) {
        $xml =<<<EOF
        <xml>
        <fieldset1>
        </fieldset1>
        <fieldset2>
        <options>
        </options>
        </fieldset2>
        </xml>
        EOF;
        $sxe = new SimpleXMLIterator($xml);
        $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
        var_dump($rit->key());
    }
    if (!true) {
        $a[10] = "42";
        $i = "010";
        var_dump($a[$i], isset($a[$i]));
    }
}
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data2'] = 200;
$version = mysqli_get_server_version($link);
function f_6() {
    return "concreteClass";
}
function f_7() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
    $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
    $create = 'CREATE TABLE test(id INT, ';
    foreach ($column_def as $v) {
            $create .= sprintf('%s, ', $v);
        }
    $create .= sprintf('%s, ', $v);
    $create = sprintf('%s)', substr($create, 0, -2));
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_array = array(10);
        $varient_arrays = array (
          /* integers */
          543915,
          -5322,
          0x55F,
          -0xCCF,
          123,
          -0654,
        
          /* strings */
          "",
          '',
          "0",
          '0',
          'string',
          "string",
        
          /* floats */
          10.0000000000000000005,
          .5e6,
          -.5E7,
          .5E+8,
          -.5e+90,
          1e5,
        
          /* objects */
          new stdclass,
        
          /* resources */
          $fp,
          $dfp,
        
          /* nulls */
          null,
          NULL,
        
          /* boolean */
          true,
          TRUE,
          FALSE,
          false,
        
          /* unset/undefined arrays  */
          @$unset_array,
          @$undefined_array
        );
        foreach ($varient_arrays as $type ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_array ($type) );
        }
        var_dump( is_array ($type) );
        ob_flush();
        catch (PDOException $e) {
            var_dump($e->getCode());
        }
        var_dump($e->getCode());
        var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
        var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
        $originalEnvelopeData = "any string with \x1a is cut at this point.";
        $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
        file_put_contents($tmpFileIn, $originalEnvelopeData);
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
        $dom = Dom\XMLDocument::createFromString(<<<XML
        <root>
            <test1 xml:id="x"/>
            <test2 xml:id="x"/>
        </root>
        XML);
        var_dump($dom->getElementById('x')?->nodeName);
        var_dump(strncmp("test ", "e", -1));
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        $offset3 = "offset";
        $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    }
}
