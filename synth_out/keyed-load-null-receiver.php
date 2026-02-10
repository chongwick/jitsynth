<?php
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
function f_0() {
    $res = [];
    $fd = fopen('php://memory','w');
}
function f_1() {
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    catch (PDOException $e) {
                printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
            }
    printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://php.net\\@aliyun.com/aaa.do");
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
}
try {
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
} catch (Exception $e) {}
if (true) {
    $pdo = MySQLPDOTest::factory();
    $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    ;
}
try {
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
    begin
            RAISE NOTICE ''11111'';
            return ''f'';
    end;
    ' LANGUAGE plpgsql;");
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
    $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
        $cdata = $ffi->new('int16_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
} catch (Exception $e) {}
if (true) {
    $readonly_anon = new readonly class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    var_dump($readonly_anon->field);
    ob_start("test");
}
