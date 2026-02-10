<?php
$reflector = new ReflectionClass(C::class);
function f_0() {
}
$t = new stdClass;
$t->prop = $t;
$HTTP_RAW_POST_DATA = <<<EOF
<?xml version="1.0" encoding="ISO-8859-1"?>
<SOAP-ENV:Envelope
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:si="http://soapinterop.org/xsd">
  <SOAP-ENV:Body>
    <ns1:test xmlns:ns1="http://testuri.org"/>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOF;
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR;
$needle = base64_decode('44CC');
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
        zerofill(9, $link, 'DOUBLE');
    }
}
function f_3() {
    $text = 'This is an ‘example’ of using DOM splitText';
    $st;
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    public function __construct($c)
        {
            $this->c = $c;
        }
    $this->c = $c;
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( strftime($value) );
          var_dump( strftime($value, $timestamp) );
    }
    var_dump( strftime($value, $timestamp) );
    $test = array("A\x00B" => "Hello world");
    var_dump($test);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'cccc');
    call_user_func('bar','second try');
    $array = new ArrayObject();
    var_dump($array->offsetExists('nokey'));
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    register_shutdown_function('ABC');
    date_default_timezone_set("Europe/Lisbon");
    abstract class Y {
        abstract public string $prop {
            get;
            set => "foo";
        }
    }
    class X extends Y {
        public string $prop {
            get => "bar";
        }
    }
    $x = new X;
    $x->prop = 1;
    var_dump($x->prop);
    printf("[002] [%d] %s\n", $link->errno, $link->error);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "attributes", fn ($n) => $n->attributes());
}
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
$string = str_repeat("A", 1024);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$info = opcache_get_status()['interned_strings_usage'];
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
var_dump($function($compressed));
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$length = $meta->length;
var_dump( range('A', 'H', fdiv(0, 0)) );
