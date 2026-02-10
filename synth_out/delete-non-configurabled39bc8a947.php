<?php
$timestamp = "2005-11-08T11:22:07+03:00";
$logOffEvents[] = new LogOffEvent(34568, $timestamp, "SmokeFree");
class LogOffEvent {
  public $audienceMemberId;
  public $timestamp;
  public $smokeStatus;
  public $callInitiator;

  function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
};
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$res = [];
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(strncmp("test ", "e", -1));
    printf("[008] PS and non-PS results differ, dumping data\n");
    $a = new Test();
    $a->TestFunc();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    set_exception_handler(function() {
        echo 'Fourth handler' . PHP_EOL;
    });
}
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
 ($dirs as $d) {
   
dirs as $d) {
;
$twoseventy = M_PI * 1.5;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
    $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
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
    zerofill(4, $link, 'MEDIUMINT');
    printf("printf test 4:%.10f\n", 10.0/3);
    var_dump(error_get_last());
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
}
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$server->addfunction("test");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$oldcwd = getcwd();
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
class Foo {
    public $dummy1;
    public $dummy2;
}
$f = new Foo;
$array = [0];
$ar = array_values($array);
var_dump($ar);
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->start();
print_r($str_instead);
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
$bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
$bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
    $cdata = $ffi->new('uint16_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
var_dump("done");
