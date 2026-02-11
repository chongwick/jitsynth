<?php
class dummy
{
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
class di extends DateInterval {
    public $unit = 1;
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
$b = 'ok';
$_b = $b;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_int());
}
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
$version = mysqli_get_server_version($link);
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$count = 1;
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($node->textContent);
main::$dummy        = new dummy();
var_dump($arg);
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
test('Ghost', $obj);
var_dump((new Exception)->getTrace());
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
$res = [];
display($res);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $textascii = 'This is an "example" of using DOM splitText';
    $start = 30;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->createTextNode($textascii);
    $matched = $node->splitText($start);
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $I = new di('P10D');
    print_r($I);
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
}
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$bytes = str_repeat("*", 65536);
$output = deflate_add(
        $deflator,
        $bytes,
        ZLIB_SYNC_FLUSH
    );
$interval = new DateInterval('P1D');
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
var_dump(soundex("Euler")       == soundex("Ellery"));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$i = 1;
$x = 2;
var_dump($i=$x);
call_user_func('bar','second try');
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
$array = new ArrayObject();
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
$dest = __DIR__ . "/bug40228";
rmdir($dest);
zerofill(9, $link, 'DOUBLE');
$im = imagecreate(800, 800);
imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
