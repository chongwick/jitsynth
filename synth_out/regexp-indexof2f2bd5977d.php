<?php
function f_0() {
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    if (true) {
        $zip = new ZipArchive();
        $zip->close();
        $diff_whitespaces = <<<EOT
        <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
        1111\t\t &amp; 0000\v\v = \f0000
        &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
        EOT;
        class P {
            protected function common() {
                throw new Exception('Unreachable');
            }
        }
        class A extends P {
            public function test(P $sibling) {
                $sibling->common();
            }
        }
        $a = new A();
        $textascii = 'This is an "example" of using DOM splitText';
        rt = 30;
        $le
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($textascii);
        $do
        ched = $node->splitText($start);
        $ma;
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            $i = 0;
            $key_compare_func = 'compare_function';
            $ftp = ftp_connect('127.0.0.1', $port);
            $user = PDO_MYSQL_TEST_USER;
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
            $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
            if (true) {
                $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
                $varOutput = ob_get_contents();
                $unset_var = 10;
            }
        }
        $hash = password_hash(
            "php",
            PASSWORD_ARGON2I,
            ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
        );
        var_dump(substr($hash, -1, 1) !== "\0");
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
        imagesetthickness($im, $thickness);
        $document = new \DOMDocument();
        $h1 = $document->getElementsByTagName('h1');
        var_dump($h1->length);
    }
    if (!true) {
        printf("printf test 25:%-2s\n", "gazonk");
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$output = array();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
$list = [];
asort($list);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
st1.txt");

var_dump(cou;
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$strA = 'test &amp; test';
$strB = 'test & test';
$res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
print_r($res);
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt->parse('abc');
$ar1 = array(1, 2);
$unset_var = 10;
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
$heredoc = <<<EOT
hello world
EOT;
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);
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
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_multisort($ar1, $value) );
    } catch (\ValueError | \TypeError $e) {
        echo $e->getMessage() . "\n";
    }
}
var_dump( array_multisort($ar1, $value) );
setlocale(LC_ALL, "C");
var_dump(range(1, 3, -1));
$oneeighty = M_PI;
var_dump(sin($oneeighty));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
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
$tester->start();
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));
$headers = ['Host: okey.com'];
$httpContext = [
    'http' => [
        'protocol_version'	=> '1.1',
        'method'			=> 'GET',
        'header'			=> &$headers,
        'follow_location'	=> 0,
        'max_redirects'		=> 0,
        'ignore_errors'		=> true,
        'timeout'			=> 60,
    ],
];
$context = stream_context_create($httpContext);
print_r(stream_context_get_options($context));
set_error_handler("customErrorHandler");
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
var_dump("DB::__construct() called");
