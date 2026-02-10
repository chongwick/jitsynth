<?php
function f_0() {
    try {
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            return false;
        }
    } catch (Exception $e) {}
    if (true) {
        return true;
    }
    return true;
}
function f_2() {
    try {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            return true;
        }
    } catch (Exception $e) {}
    if (true) {
        public function getHash($object): string { return get_class($object); }
        return get_class($object);
    }
    $response = ob_get_contents();
    return $response;
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    var_dump($res);
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    set_error_handler(function() {
    //    var_dump(func_get_args());
        DoesNotExists::$nope = true;
    }, E_ALL);
    $twoseventy = M_PI * 1.5;
    var_dump(sin($twoseventy));
}
var_dump( range(1, 7, fdiv(0, 0)) );
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt->parse('abc');
function f_6() {
    $timestamp = "2005-11-08T11:22:07+03:00";
    $logOffEvents[] = new LogOffEvent(34567, $timestamp, "Smoked");
    class LogOffEvent {
      public $audienceMemberId;
      public $timestamp;
      public $smokeStatus;
      public $callInitiator;
    
      function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    };
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
        var_dump($dt);
    }
    public function getHash($object): string { return get_class($object); }
    return get_class($object);
}
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $pdo = MySQLPDOTest::factory();
    $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
}
function f_9() {
    $fn = function() { return static::name(); };
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $strtotime_timestamp = strtotime ("Monday", $tStamp);
    function f_10() {
        $dbh = @pg_connect($conn_str);
        $i = 0;
    }
    $other = new DateTime("31-July-2008");
    function & test($arg) {
        return $arg;
    }
    $arg = new Stdclass();
    test($arg)->name[1] = "xxxx";
    $heredoc = <<<EOT
    Hello world
    EOT;
    class dataAccessor
    {
    }
    main::$dataAccessor = new dataAccessor;
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    $msgfmt2 = clone $msgfmt;
    var_dump(1);
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    var_dump('ERR');
}
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
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
$style = array();
imagesetstyle($im, $style);
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
$row = mysqli_fetch_assoc($res);
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$length = $meta->length;
$expected = str_repeat('0', $length - strlen($insert));
$expected .= $insert;
printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$array = [0];
$ar = array_values($array);
var_dump($ar);
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->getTimeZone()->getID());
error_reporting(E_ALL);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$fp = tmpfile();
fwrite($fp, "I am the LOB data");
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
var_dump(getopt("abcd"));
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
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 6);
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$var = 10;
$arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with object, unset variable and resource variable
       array(@$unset_var => "hello", $fp => 'resource'),

       // array with mixed keys
/*11*/ array('hello' => 1, "fruit" => 2.2,
             $fp => 'resource', 133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";

  /* with default argument */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
  var_dump( array_unshift($temp_array, $var) );

  // dump the resulting array
  var_dump($temp_array);

  /* with optional arguments */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
  var_dump( array_unshift($temp_array, $var, "hello", 'world') );

  // dump the resulting array
  var_dump($temp_array);
  $iterator++;
}
$temp_array = $array;
var_dump( array_unshift($temp_array, $var) );
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
