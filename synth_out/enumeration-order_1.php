<?php
function f_0() {
    $inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump($obj);
    }
    $db = MySQLPDOTest::factory();
}
function f_2() {
    $cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $c = [];
    }
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $loop_counter++;
    }
    $test('sensitive');
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
}
function f_6() {
    $r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
    }
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $found = false;
    date_default_timezone_set("UTC");
    $mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
}
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    var_dump ( rtrim("rtrim test   " , "") );
}
$EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
$this->values = array('a' => 0);
_MIME_TYPE);
var_dump($fi->file($f));
$mutable = $reflection->newInstanceWithoutConstructor();
$canary = new Canary(null);
$res = $mysqli->query('SELECT 42');
$box = new Box();
$envelopeData = file_get_contents($tmpFileOut2);
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$test[]=$test2;
$text = 'This is an ‘example’ of using DOM splitText';
$st;
$mb=148;
$url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
main::$dataAccessor = new dataAccessor;
$ar = array_values($array);
$res = [];
$res = [];
$canary = new Canary(null);
$mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
$immutable = \DateTimeImmutable::createFromInterface($mutable);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$a = &$GLOBALS['a'];
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$_ = str_repeat("A", 512);
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$arr = array('a', 'b');
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
}
var_dump(@$obj->dynamic++);
