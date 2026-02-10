<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    }
}
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            class foo
            {
            // no members
            }
            $fp = fopen (__FILE__, "r");
            $dfp = opendir ( __DIR__ );
            $unset_object = new foo();
            $not_objects = array (
              0,
              -1,
              0.1,
              -10.0000000000000000005,
              10.5e+5,
              0xFF,
              0123,
              $fp,  // resource
              $dfp,
              array(),
              array("string"),
              "0",
              "1",
              "",
              true,
              NULL,
              null,
              @$unset_object, // unset object
              @$undefined_var, // undefined variable
            );
            foreach ($not_objects as $type ) {
              echo "-- Iteration $loop_counter --\n"; $loop_counter++;
              var_dump( is_object($type) );
            }
            var_dump( is_object($type) );
        }
    }
}
$fixedArray = new SplFixedArray(1);
$fixedArray[0] = 'the element';
$values =  array (
  //Decimal values
  0,
  1,
  12345,
  -12345,

  //Octal values
  02,
  010,
  030071,
  -030071,

  //Hexadecimal values
  0x0,
  0x1,
  0xABCD,
  -0xABCD
);
function f_5() {
    $a = 1;
    return $a;
}
$references = array();
$idx = 0;
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
$references[$idx]['id_ref'] 		= &$rows[$i]['id'];
$twoseventy = M_PI * 1.5;
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$db = createDB();
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
$id = $db->lastInsertId();
$a = 'ok';
$_a = $a;
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
test('Ghost', $obj);
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 2);
$meta_res = $stmt->result_metadata();
for ($field_idx = 0; $field_idx < $meta_res->field_count; $field_idx++) {
        $field = $meta_res->fetch_field();
        printf("Field        : %d\n", $field_idx);
        printf("Name         : %s\n", $field->name);
        printf("Orgname      : %s\n", $field->orgname);
        printf("Table        : %s\n", $field->table);
        printf("Orgtable     : %s\n", $field->orgtable);
        printf("Maxlength    : %d\n", $field->max_length);
        printf("Length       : %d\n", $field->length);
        printf("Charsetnr    : %d\n", $field->charsetnr);
        printf("Flags        : %d\n", $field->flags);
        printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
        printf("Decimals     : %d\n", $field->decimals);
    }
printf("Field        : %d\n", $field_idx);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
class A2 { // A1 with private function test
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
	private function test() {}
}
class B2 extends A2 {
	public function test(){	parent::test();	}
}
$test2 = new B2;
$test2->test();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));
function f_6() {
    function & test($arg) {
        return $arg;
    }
    return $arg;
}
function f_7() {
    return 0;
}
function f_8() {
    return str_repeat('a', 1);
}
$array = [0];
$r = new ReflectionClass('Test2');
rt = 30;
$le;
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
$iterator = 1;
$iterator++;
$reflection = new ReflectionClass('\DateTime');
$index_array = array (1, 2, 3);
$string = str_repeat("A", 1024);
highlight_string($string, true);
var_dump($br);
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( strftime($value) );
      var_dump( strftime($value, $timestamp) );
}
var_dump( strftime($value, $timestamp) );
$list = new SplDoublyLinkedList();
$list->push('f');
function f_9() {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        for ($i_11 = 0; $i_11 < 10; $i_11++) {
            class A
            {
                public string $prop;
            }
            $a = new A();
            try {
                #[\AllowDynamicProperties]
                class C {
                    public $b;
                    public function __construct() {
                        $this->a = new Canary();
                    }
                }
                $obj = new C();
            } catch (Exception $e) {}
            if (true) {
                $index_array = array (1, 2, 3);
            }
            var_dump(soundex("Hilbert"));
        }
    }
}
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
