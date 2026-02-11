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
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function f_0() {
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    }
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $auz = new DateTime($time, $tz_aus);
}
function f_2() {
    $document = new \DOMDocument();
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $conn = odbc_connect($dsn, $user, $pass);
    }
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $x = 1;
        $x += 0;
        ++$x;
    }
    $row = mysqli_fetch_assoc($res);
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    $expected = str_repeat('0', $length - strlen($insert));
    $expected .= $insert;
    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
}
function f_6() {
    $attrs = [];
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $ch = curl_init("https://localhost/userpwd");
    }
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    $host = curl_cli_server_start();
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    var_dump( current($resources) );
}
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    phpinfo(INFO_MODULES);
}
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
$key = str_repeat('abc', random_int(3, 3));
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
$dsn = ini_get('pdo.dsn.mysql');
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
$tStamp = mktime (17, 17, 17, 10, 27, 2004);
$strtotime_timestamp = strtotime ("Monday", $tStamp);
$container = false;
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$needle = base64_decode('44CC');
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$b = "30";
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$date = odbc_result($res, "DATE_COL");
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
$idx = 0;
$res = [];
$headers = ["Host: bad.com"];
$fp = php_cli_server_connect();
$priorityQueue = new SplPriorityQueue();
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$start = 30;
$cpca = __DIR__ . "/san-cert.pem";
$pass = "qwerty";
$user = PDO_MYSQL_TEST_USER;
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$start = memory_get_usage() + 1024;
$closure1 = new_closure_gen();
$gen2 = $closure1();
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['used_memory'] + $info['free_memory']);
}
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
