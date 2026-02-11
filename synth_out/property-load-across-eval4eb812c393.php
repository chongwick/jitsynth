<?php
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
class C extends stdClass {
    public int $a;
}
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
$notDefined[$i] = 'test';
function f_0() {
    return true;
}
function f_1() {
    $res = [];
    $res[] = $re;
    function f_2() {
        return true;
    }
    function f_3() {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
        $date = new DateTime("28-July-2008");
        $other = new DateTime("31-July-2008");
        $diff = date_diff($date, $other);
        var_dump($diff);
        try {
            $iterator = 1;
            $iterator++;
        } catch (Exception $e) {}
        if (true) {
            zerofill(7, $link, 'BIGINT');
        }
        $varOutput = ob_get_contents();
        $varOutput = str_replace(
                [$var_dim_filename],
                ['%s'],
                $varOutput
            );
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                    $trace_file,
                    filesize($trace_file));
        zerofill(2, $link, 'TINYINT');
        function f_4() {
            $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
            $needle = array(
              //regular strings
              'l',
              'L',
              'HELLO',
              'hEllo',
            
              //escape characters
              '\t',
              '\T',
              '     ',
              '\n',
              '\N',
              '
            ',  //new line
            
              //nulls
              '\0',
            
              //boolean false
              FALSE,
              false,
            
              //empty string
              '',
            
              //special chars
              ' ',
              '$',
              ' $',
              '&',
              '!#',
              '%\o',
              '\o,',
              '()',
              '*+',
              '+',
              '-',
              '.',
              '.;',
              ':;',
              ';',
              '<=>',
              '>',
              '=>',
              '?',
              '@',
              '@hEllo',
            
              '12345', //decimal numeric string
              '\x23',  //hexadecimal numeric string
              '#',  //hexadecimal numeric string
              '\101',  //octal numeric string
              'A',
              '456HEE',  //numerics + chars
              42, //needle as int(ASCII value of '*')
              $haystack  //haystack as needle
            );
            for($index=0; $index<count($needle); $index++) {
              echo "\n-- Iteration $count --\n";
              var_dump( strrchr($haystack, $needle[$index]) );
              $count ++;
            }
            var_dump( strrchr($haystack, $needle[$index]) );
            try {
                $i = 0;
                $i++;
            } catch (Exception $e) {}
            if (true) {
                $values = array(10,
                                10.3,
                                3.9505e3,
                                037,
                                0x5F,
                                "10",
                                "3950.5",
                                "3.9505e3",
                                "039",
                                true,
                                false,
                                );
                foreach($values as $value) {
                    echo "\n-- Iteration $iterator --\n";
                    var_dump(expm1($value));
                    $iterator++;
                }
                var_dump(expm1($value));
            }
            $db = getDbConnection();
            $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
            $tester = new FPM\Tester($cfg);
            $tester->terminate();
            $conn = odbc_connect($dsn, $user, $pass);
            $res = odbc_exec($conn, "SELECT * FROM bug80147");
            odbc_fetch_row($res);
        }
        $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
        fclose($fp);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
}
foo();
function f_5() {
    );
    if (!$reader->open($fil
    ttribute('num');
                echo $reade;
    function f_6() {
        return true;
    }
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
    function f_7() {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Name         : %s\n", $field->name);
        set_time_limit(5);
        ini_set('mysqlnd.fetch_data_copy', true);
        bar('first try');
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $xml = simplexml_load_string($xmlString);
        $nodes = $xml->a->b;
        test($nodes, "asXml", fn ($n) => $n->asXml());
        function f_8() {
            $oIntlDateFormatter = new IntlDateFormatter("en_GB");
            var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
            $a = new Test();
            $a->TestFunc();
            $cert = "file://" . __DIR__ . "/cert.crt";
            var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
            var_dump(sprintf("%%", 1.23456789e10));
        }
        $thirty = M_PI / 6.0;
        var_dump(sin($thirty));
    }
    $_ = str_repeat("A", 512);
    openssl_seal($_, $_, $_, array_fill(0,64,0));
}
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
function f_9() {
    $date = '7.8.2010';
    function f_10() {
        return false;
    }
    function f_11() {
        $test = function (#[SensitiveParameter] $sensitive)
        {
            debug_print_backtrace();
            var_dump(debug_backtrace());
            var_dump((new Exception)->getTrace());
        };
        $test('sensitive');
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->resetAsLazyProxy($obj, function ($obj) {
            });
        $depth0 = "depth02";
        touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
        $file_handle = fopen(__FILE__, "r");
        $values = array (
          /* integers */
          0,  // zero as argument
          000000123,  //octal value of 83
          123000000,
          -00000123,  //octal value of 83
          -12300000,
          0xffffff,  //hexadecimal value
          123456789,
          1,
          -1,
        
          /* floats */
          -0.0,
          +0.0,
          1.234,
          -1.234,
          -2.000000,
          2.0000000,
          -4.0001e+5,
          4.0001E+5,
          6.99999989,
          -.5,
          .567,
          -.6700000e-3,
          -.6700000E+3,
          1E-5,
          -1e+5,
          1e+5,
          1E-5,
        
          /* strings */
          "",
          '',
          " ",
          ' ',
          "0",
          "\0",
          '\0',
          "\t",
          '\t',
          "PHP",
          'PHP',
          "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
        
          /* boolean */
          TRUE,
          FALSE,
          true,
          false,
        
          /* arrays */
          array(),
          array(NULL),
          array(true),
          array(""),
          array(''),
          array(array(1, 2), array('a', 'b')),
          array("test" => "is_array", 1 => 'One'),
          array(0),
          array(-1),
          array(10.5, 5.6),
          array("string", "test"),
          array('string', 'test'),
        
          /* resources */
          $file_handle
        );
        foreach( $values as $value ) {
          echo "-- Iteration $counter --\n";
          debug_zval_dump( $value );
          $counter++;
        }
        debug_zval_dump( $value );
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
        $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            return new C();
        });
        test('Proxy', $obj);
        php_cli_server_start('http_response_code(422);');
        function f_12() {
            $a = new PDO("sqlite::memory:");
            $b = $a->prepare("insert into test_35336 (b) values (?)");
            $b->execute(array (5));
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
            $stmt->execute([ 0 ]);
            $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
            var_dump(file_exists($filename));
            ini_set('mysqlnd.fetch_data_copy', false);
        }
        var_dump($row['bit_column_1']);
    }
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut2);
}
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
