<?php
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
function bar() {
    boo();
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function dumpElement() {
    list($value) = yield;
    var_dump($value);
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
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
class C extends P {
    use T;
}
$flags = array(
        MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
        MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
        MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
        MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
        MYSQLI_BLOB_FLAG => 'BLOB',
        MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
        MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
        MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
        MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
        MYSQLI_SET_FLAG	=> 'SET',
        MYSQLI_NUM_FLAG => 'NUM',
        MYSQLI_PART_KEY_FLAG => 'PART_KEY',
        // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
        (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
        (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
        (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
        // MYSQLI_BINCMP_FLAG
    );
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
function f_0() {
}
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$reflector = new ReflectionClass(C::class);
$to = "specials";
$a=glob("./*.jpeg");
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $flags = array(
                MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                MYSQLI_BLOB_FLAG => 'BLOB',
                MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                MYSQLI_SET_FLAG	=> 'SET',
                MYSQLI_NUM_FLAG => 'NUM',
                MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                // MYSQLI_BINCMP_FLAG
            );
        $field = mysqli_fetch_field_direct($res, 1);
        $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
        list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
        printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                            $unexpected_flags, $field->name, $flags_found);
    }
}
function f_3() {
    $doc = new \DOMDocument();
    $response = ob_get_contents();
    bar();
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    test('Ghost', $obj);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xml"));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(NULL));
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump( strtok("\0") );
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    var_dump(pack('x') === "\0");
    ob_end_clean();
    zerofill(3, $link, 'SMALLINT');
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
}
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
foreach( $strings as $str ){
  var_dump(nl2br($str) );
}
var_dump(nl2br($str) );
$assoc_array = array ('one' => 1, 'two' => 2);
$sh = new SessionHandler;
$sh->write("foo", "bar");
$references = array();
$idx = 0;
$references[$idx]['row_copy'] 	= $row;
$a = new A();
$a->test(new C());
$iterator = 1;
$file_handle = fopen(__FILE__, "r");
fclose($file_handle);
