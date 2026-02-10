<?php
function f_0() {
    return true;
}
function f_1() {
    return 42;
}
function f_2() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
}
function f_3() {
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
    class PHPUnit_Framework_MockObject_Invocation_Static {
        public $parameters;
        public function __construct(array $parameters) {
            $this->parameters = $parameters;
        }
    }
    public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    $arguments = array($a, $b, $c);
    $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
    return $result;
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    var_dump($prop->getRawValue($a));
    ob_start();
    $dest = __DIR__ . "/bug40228";
    $zip = new ZipArchive;
    $zip->extractTo($dest);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    public static function myMethod(string $foo) {
            echo "Called ", __METHOD__, PHP_EOL;
            var_dump($foo);
        }
    var_dump($foo);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
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
    printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
}
