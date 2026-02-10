<?php
function f_0() {
    $arr = array('http'=>
                            array(
                                    'follow_location'=>1,
                            )
                    );
    $context = stream_context_create($arr);
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
    catch (PDOException $e) {
        var_dump($e->getCode());
    }
    var_dump($e->getCode());
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    $iterator = 1;
    mysqli_free_result($res);
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
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
foreach($arrays as $arr2) {
  echo "-- Iterator $iterator --\n";

  // Calling array_intersect() with default arguments
  var_dump( array_intersect($arr1, $arr2) );

  // Calling array_intersect() with more arguments.
  // additional argument passed is the same as $arr1 argument
  var_dump( array_intersect($arr1, $arr2, $arr1) );
  $iterator++;
}
var_dump( array_intersect($arr1, $arr2, $arr1) );
var_dump(soundex("Hilbert") == soundex("Ladd"));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
$a->next();
printf("printf test 11: 123456789012345678901234567890\n");
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo "1";//22');
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
date_default_timezone_set("UTC");
class MySessionHandler implements SessionHandlerInterface {
    function open($save_path, $session_name): bool {
        return true;
    }

    function close(): bool {
        die("close: goodbye cruel world\n");
    }

    function read($id): string|false {
        return '';
    }

    function write($id, $session_data): bool {
        die("write: goodbye cruel world\n");
    }

    function destroy($id): bool {
        return true;
    }

    function gc($maxlifetime): int {
        return 1;
    }
}
session_set_save_handler(new MySessionHandler());
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$bar = (int)$foo;
var_dump($bar);
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
mysqli_close($link);
spl_autoload_register();
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
var_dump(class_exists("TestClass", true));
