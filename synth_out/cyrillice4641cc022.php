<?php
class classA
{
  public function __toString() {
    return "key";
  }
}
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
class foo
{
// no members
}
abstract class abstractClass
{
  abstract protected function getClassName();
  public function printClassName () {
    echo $this->getClassName() . "\n";
  }
}
class concreteClass extends abstractClass
{
  protected function getClassName() {
    return "concreteClass";
  }
}
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
class myClass
{
  var       $foo_object;
  public    $public_var;
  public    $public_var1;
  private   $private_var;
  protected $protected_var;

  function __construct ( ) {
    $this->foo_object = new foo();
    $this->public_var = 10;
    $this->public_var1 = new foo();
    $this->private_var = new foo();
    $this->protected_var = new foo();
  }
}
class A {
    public $a;
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
class di extends DateInterval {
    public $unit = 1;
}
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class B extends P {
    protected function common() {
        echo __METHOD__, "\n";
    }
}
function get() {
    $t = new stdClass;
    $t->prop = $t;
    return $t;
}
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
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
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$bar = new DateTime();
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
$unset_var = 10;
$heredoc = <<<EOT
key
EOT;
$fp = fopen(__FILE__, "r");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
$test=array();
function f_0() {
    return;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $a = "lest";
    $a[0] = "t";
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
        $x = new X;
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do;
        $var = -PHP_INT_MAX - 1;
        $me = new static;
        $ao = new ArrayObject(new C);
        $ai = $ao->getIterator();
        $lazy = false;
        $dom = new DOMDocument();
        $xpath = new DOMXpath($dom);
        foreach($xpath->query('/root/noexist') as $child) {
            var_dump($child);
        }
        var_dump($child);
        $zip = new ZipArchive();
        $zip->close();
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
        $bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
            $cdata = $ffi->new('int8_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
        printf("printf test 3:%f\n", 10.0/3);
        $rc = new ReflectionClass('Foo');
        var_dump($rc->getStaticProperties());
        $myClass_object = new myClass();
        $foo_object = new foo();
        $Value_object = new Value();
        $concreteClass_object = new concreteClass();
        $valid_objects = array(
          new stdclass,
          new foo,
          new concreteClass,
          new Value,
          new myClass,
          $myClass_object,
          $myClass_object->foo_object,
          $myClass_object->public_var1,
          $foo_object,
          $Value_object,
          $concreteClass_object
        );
        foreach ($valid_objects as $object ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_object($object) );
        }
        var_dump( is_object($object) );
        $a = new A();
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
        var_dump($prop->getRawValue($a));
        $textascii = 'This is an "example" of using DOM splitText';
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($textascii);
        $do
        ->appendChild($node);
        
        pr;
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
        ini_set("soap.wsdl_cache_enabled",0);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
        if (true) {
            unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
            var_dump($row[0]);
        }
    }
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzread($h, 8));
    }
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    if (true) {
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
    }
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $str = "repeater id='loopt' dataSrc=subject columns=2";
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
    var_dump(getopt("abcd"));
    $obj = new C();
    var_dump($obj->a);
    $unset_var = 10;
    $fp = fopen(__FILE__, "r");
    $heredoc = <<<EOT
    Hello world
    EOT;
    $var = 10;
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
    
           // array with object, unset variable and resource variable
           array(@$unset_var => "hello", $fp => 'resource'),
    
           // array with mixed keys
    /*11*/ array('hello' => 1, "fruit" => 2.2,
                 $fp => 'resource', 133 => "int",
                 @$unset_var => "unset", $heredoc => "heredoc")
    );
    foreach($arrays as $array) {
      echo "-- Iteration $iterator --\n";
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var) );
    
      // dump the resulting array
      var_dump($temp_array);
    
      /* with optional arguments */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    
      // dump the resulting array
      var_dump($temp_array);
      $iterator++;
    }
    $temp_array = $array;
    var_dump( array_unshift($temp_array, $var) );
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastRequestHeaders());
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    $file = __DIR__ . "/bug71127.inc";
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    $db = getDbConnection();
    $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C();
    });
    $I = new di('P10D');
    print_r($I);
    var_dump(strncmp("test ", "e", -1));
    $various_arrays = array (
      array(5 => 55,  66, 22, 33, 11),
      array ("a" => "orange",  "banana", "c" => "apple"),
      array(1, 2, 3, 4, 5, 6),
      array("first", 5 => "second", "third"),
      array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
      array('bar' => 'baz', "foo" => 1),
      array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
    );
    foreach ($various_arrays as $array) {
      echo "\n-- Iteration $count --\n";
    
      echo "- With default sort_flag -\n";
      $temp_array = $array;
      var_dump(asort($temp_array) );
      var_dump($temp_array);
    
      echo "- Sort_flag = SORT_REGULAR -\n";
      $temp_array = $array;
      var_dump(asort($temp_array, SORT_REGULAR) );
      var_dump($temp_array);
      $count++;
    }
    $temp_array = $array;
    var_dump(asort($temp_array, SORT_REGULAR) );
    var_dump(preg_replace_callback_array([], []));
    $link = mysqli_init();
    $japanese_so = pack('H4', '835c');
    var_dump($link->real_escape_string($japanese_so) === $japanese_so);
    $a = new A();
    $a->test(new B());
    $obj = new test;
    printf("[009] Cannot run SELECT, [%d] %s\n",
                    mysqli_errno($link), mysqli_error($link));
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
    $link->close();
    var_dump(get());
    $a[10] = "42";
    $i = "010";
    var_dump($a[$i], isset($a[$i]));
    $dir_handle = opendir( __DIR__ );
    ini_set("intl.error_level", E_WARNING);
    $fp = fopen("php://memory", "r+");
    rewind($fp);
    test("http://t[est@[::1]");
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    foreach( $search_arr as $value ) {
      echo "\n-- Iteration $i --\n";
      /* replace the string in array */
      var_dump( str_replace($value, "FOUND", $search_arr, $count) );
      var_dump( $count );
      $i++;
    }
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    $db = PDOTest::factory();
    $db->beginTransaction();
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $dom = new DOMDocument('1.0', 'UTF-8');
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $code = <<<EOT
        <?php
        echo \$_SERVER["SCRIPT_NAME"] . "\n";
        echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
        echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
        echo \$_SERVER["PATH_INFO"] . "\n";
        echo \$_SERVER["PHP_SELF"];
        EOT;
        $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
        
        $xmlstring = '<?xml ve;
        $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $db = MySQLPDOTest::factory();
            $initialRequest = true;
            $b = NULL;
            $found = false;
            $im = imagecreate(800, 800);
            imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
            $fixedArray = new SplFixedArray(1);
            $generator = dumpElement();
            $generator->send($fixedArray);
            session_set_save_handler(new MySessionHandler());
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            var_dump($dom->lookupNamespaceURI(NULL));
            $style = array();
            imagesetstyle($im, $style);
        }
    }
}
