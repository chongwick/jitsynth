<?php
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
}
function genResponses($server) {
    $uri = 'http://' . stream_socket_get_name($server, false);
    yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
    $xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
    // Missing content-type in actual response.
    yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar['a.php'] = '<php echo "this is a\n"; ?>';
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
touch("$d1\\test1.txt");
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
stream_filter_register('user_filter','user_filter');
printf("printf test 5:%-10.2f\n", 2.5);
$db = PDOTest::factory();
$db->beginTransaction();
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->close();
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
var_dump(sprintf("%%", 1.23456789e10));
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
printf("printf test 19:%16x\n", 170);
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
$class = new SomeClass;
$arr = [$class];
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
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
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$a = new Test();
$a->TestFunc();
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
$headers = $client->__getLastRequestHeaders();
function f_0() {
    $lazy = true;
    $mem = $lazy ? 0 : 1;
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$s = 'C:15:"ReflectionClass":0:{}';
function f_1() {
    $uri = 'http://' . stream_socket_get_name($server, false);
}
printf("Content-Type Default OK" . PHP_EOL);
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
