<?php
$users = MailBox::USERS;
$bcc = $users[2];
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
function f_0() {
    $t = new stdClass;
    return $t;
}
function f_1() {
    return "Object";
}
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
function f_2() {
    $c = "assert";
    $c(false);
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
}
$array = [0];
$ar = array_values($array);
var_dump($ar);
function f_3() {
}
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
$a=glob("./*.jpeg");
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
function f_4() {
     = new DOMDocument('1.0', 'UTF-8');
    $no;
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $count = 1;
    $create = 'CREATE TABLE test(id INT, ';
    ion="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($file;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
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
        printf("printf test 8:<%20s>\n", "foo");
    }
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:html"));
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $tester = new FPM\Tester($cfg);
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        $tester->expectLogNotice($userMessage, 'cccc');
    }
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $dom = new DOMDocument;
        $element = $dom->appendChild($dom->createElement('root'));
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzread($h, 0));
    }
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
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    for ($i_9 = 0; $i_9 < 10; $i_9++) {
        $a[1] = 5;
        $users = MailBox::USERS;
        $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
        $msgfmt2 = clone $msgfmt;
        if (true) {
            var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
        }
        if (!true) {
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
            $tester
                ->request('', ['SCRIPT_FILENAME' => null])
                ->expectHeader('Status', '404 Not Found')
                ->expectError('Primary script unknown');
        }
    }
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $cfg['poolTemplate'] = <<<EOT
        [%name%]
        listen = {{ADDR[%name%]}}
        user = foo
        pm = ondemand
        pm.max_children = 5
        EOT;
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        $sixty = M_PI / 3.0;
        if (true) {
            $now = new DateTimeImmutable();
            $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
            $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
            $dateperiod->__unserialize(['start' => $now, 'end' => $date]);
        }
        if (!true) {
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
            printf("[%03d] SELECT failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
        }
    }
    class Foo {
        public function __destruct() {
            debug_print_backtrace();
        }
    }
    $foo = new Foo();
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $dt = new DateTime('first day of January 2011');
        var_dump($dt);
        if (true) {
            $me = new static;
        }
    }
    $argv = null;
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    for ($i_12 = 0; $i_12 < 10; $i_12++) {
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
        var_dump($prefixed->lookupNamespaceURI("a"));
        if (true) {
            $vars = array (
              '\$ -> This represents the dollar sign. hello dollar!!!',
              '\t\r\v The quick brown fo\fx jumped over the lazy dog',
              'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
              'hello world\\t',
              'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
            );
        }
    }
    $fp = fopen(__FILE__, "r");
    $iterator = 1;
    $iterator++;
    foreach ($offsets as $offset) {
        $dimension = &$offset;
        $container = false;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $dimension = &$offset;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $row_stmt = null;
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $tester = new FPM\Tester($cfg);
        $tester->expectLogStartNotices();
        if (true) {
            $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
            $prefix . "フォルダ";
            
            mkdir($prefi;
        }
    }
    list($value) = yield;
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $mysqli->query('SELECT 42');
    for ($i_14 = 0; $i_14 < 10; $i_14++) {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        var_dump($stmt->nextRowset());
        if (true) {
            $tbl = "test";
            $to = "specials";
        }
    }
}
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
function f_15() {
    class B {
    
        private $mysqli;
    
        public function __construct() {
            global $user, $host, $passwd, $db, $port, $socket;
            $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
            $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
            $row = $result->fetch_object();
            echo $row->my_time."<br>\n";
            $result->close();
        }
    
        public function __destruct() {
            $this->mysqli->close();
        }
    }
    $B = new B();
    $xml = '
    <data id="1">
        <key>value</key>
    </data>
    ';
    $res = [];
    $res[] = $re;
    $dyadic = 0.00000000000045474735088646411895751953125;
    $x = 1;
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            function new_closure_gen() {
                return function() {
                    static $foo = 0;
                    yield ++$foo;
                };
            }
            $closure2 = new_closure_gen();
        }
        $s = 'O:15:"ReflectionClass":0:{}';
    }
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    class TestObject {}
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
    $batch_file_content = <<<EOT
    @echo off
    powershell -Command "Write-Output '%0%'"
    powershell -Command "Write-Output '%1%'"
    EOT;
    for ($i_17 = 0; $i_17 < 10; $i_17++) {
        if (true) {
            $num = 100000;
            $a = Array();
            for ($i=0; $i<$num; $i++) {
              $a[$i] = Array(1);
            }
            $a[$i] = Array(1);
        }
        $unset_var = 10;
        $heredoc = <<<EOT
        Hello world
        EOT;
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
        
               // array with unset variable
        /*10*/ array( @$unset_var => "hello"),
        
               // array with mixed keys
        /*11*/ array('hello' => 1,  "fruit" => 2.2,
                     133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
    }
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 5));
    $initialRequest = false;
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
        }
        $timestamp = "2005-11-08T11:22:07+03:00";
        $wsdl = __DIR__."/bug35142.wsdl";
        class TestSoapClient extends SoapClient {
          private $server;
        
          function __construct($wsdl, $options) {
            parent::__construct($wsdl, $options);
            $this->server = new SoapServer($wsdl, $options);
            $this->server->addFunction('PostEvents');
          }
        
          function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        
        }
        function __construct($wsdl, $options) {
            parent::__construct($wsdl, $options);
            $this->server = new SoapServer($wsdl, $options);
            $this->server->addFunction('PostEvents');
          }
        $soapClient = new TestSoapClient($wsdl,
            array('trace' => 1, 'exceptions' => 0,
                'classmap' => array('logOnEvent' => 'LogOnEvent',
                    'logOffEvent' => 'LogOffEvent',
                    'events' => 'IVREvents')));
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        $ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
        $result = $soapClient->PostEvents($ivrEvents);
        class LogOnEvent {
          public $audienceMemberId;
          public $timestamp;
        
          function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        }
        class IVREvents {
          public $version;
          public $activityId;
          public $messageId;
          public $source;
          public $logOnEvent;
          public $logOffEvent;
        
          function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
            $this->version = $version;
            $this->activityId = $activityId;
            $this->messageId = $messageId;
            $this->source = $source;
            $this->logOnEvent = $logOnEvent;
            $this->logOffEvent = $logOffEvent;
          }
        };
    }
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    $heredoc = <<<EOT
    hello world
    EOT;
    $_ = str_repeat("A", 512);
    $ar1 = array("row1" => 2, "row2" => 1);
    for ($i_19 = 0; $i_19 < 10; $i_19++) {
        if (true) {
            $test = array("A\x00B" => "Hello world");
        }
        $a = "lest";
        $a[0] = "t";
    }
    gc_collect_cycles();
    function new_closure_gen() {
        return function() {
            static $foo = 0;
            yield ++$foo;
        };
    }
    $closure1 = new_closure_gen();
    $gen2 = $closure1();
    $strB = 'test & test';
    class D {
        public string $prop;
    }
    $d = new D();
    for ($i_20 = 0; $i_20 < 10; $i_20++) {
        if (true) {
            $reflector = new ReflectionClass(DateTime::class);
            $obj = $reflector->newLazyGhost(function ($obj) {
                    var_dump("initializer");
                    $obj->__construct();
                });
        }
        public function offsetExists($index): bool {
                return isset($this->array[$index]);
            }
        public function offsetGet($index): mixed {
                return $this->array[$index];
            }
        public function offsetSet($index, $value): void {
                echo __METHOD__ . "($index, $value)\n";
                $this->array[$index] = $value;
            }
        $this->array[$index] = $value;
    }
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
}
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%030.-15s", $tempstring));
