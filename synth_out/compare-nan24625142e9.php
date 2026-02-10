<?php
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    var_dump($foo);
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    $zip = new ZipArchive();
    $zip->close();
    $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
    file_get_contents('dummy://foo', false, $context);
    $a = new Test();
    $a->TestFunc();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    $output = array();
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    class A {
        public $b;
    }
    $a = new A;
    var_dump($a);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    ;
    
    ?>;
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
$sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now, true);
    $a = 'ok';
    $_a = $a;
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
}
