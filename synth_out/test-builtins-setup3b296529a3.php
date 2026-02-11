<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
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
class A {
    public $a;
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
function f_0() {
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    test("http://php.net\\@aliyun.com/aaa.do");
}
function f_1() {
    $f = __DIR__."/data/test.txt.gz";
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    var_dump(-2147483647 % -1);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
}
function f_2() {
    $x = match (true) {};
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
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    spl_autoload_register(function ($name) {
        spl_autoload_unregister("spl_autoload_call");
    });
    mysqli_query($link, 'ALTER TABLE test DROP zero');
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                $trace_file,
                filesize($trace_file));
    printf("[005] [%d] %s\n", $link->errno, $link->error);
    printf("printf test 18:%16b\n", 170);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
}
function f_3() {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
}
function f_4() {
    $reflection = new ReflectionClass('\DateTimeImmutable');
    printf("printf test 12:%5.2f\n", -12.34);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    if (true) {
        $a = new A();
        $re = new ReflectionExtension("hash");
    }
    if (!true) {
        $host = PHP_CLI_SERVER_HOSTNAME;
    }
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Length       : %d\n", $field->length);
    var_dump(http_get_last_response_headers());
    $host = curl_cli_server_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    $im = imagecreate(800, 800);
    imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
    var_dump($obj);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
}
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
var_dump(tidy_get_body($t));
var_dump(__METHOD__);
$client2 = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("")
    ],
  ]),
]);
$headers = $client2->__getLastRequestHeaders();
printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
$id_1_date = '2014-09-23';
$id_2_date = '2014-09-24';
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
$obj = new testObject();
$obj->setTest('test');
