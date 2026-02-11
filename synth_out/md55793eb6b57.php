<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
class foo
{
// no members
}
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
class A
{
    public string $prop;
}
class di extends DateInterval {
    public $unit = 1;
}
class C {
    public $a;
    public int $b = 1;

    public function __construct(int $a) {
        var_dump(__METHOD__);
        $this->a = $a;
        $this->b = 2;
    }
}
function & test($arg) {
    return $arg;
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
function f_0() {
    return 42;
}
function f_1() {
    $heredoc = <<<EOT
    hello world
    EOT;
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
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
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $pdo = new \PDO($dsn, null, null);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $im = ImageCreateTrueColor(10, 10);
        $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
        $fp = fopen(__FILE__, "r");
        $a = 1;
        $tests = array(
            1 => array(
                '$6$saltstring',
                'Hello world!',
                '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
            ),
            2 => array(
                '$6$rounds=10000$saltstringsaltstring',
                'Hello world!',
                '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
            ),
            3 => array(
                '$6$rounds=5000$toolongsaltstring',
                'This is just a test',
                '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
            ),
            4 => array(
                '$6$rounds=1400$anotherlongsaltstring',
                'a very much longer text to encrypt.  This one even stretches over morethan one line.',
                '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
            ),
            5 => array(
                '$6$rounds=77777$short',
                'we have a short salt string but not a short password',
                '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
            ),
            6 => array(
                '$6$rounds=123456$asaltof16chars..',
                'a short string',
                '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
            ),
            7 => array(
                '$6$$bar$',
                'foo',
                '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
            ),
            8 => array(
                '$6$rounds=10$roundstoolow',
                'the number of rounds is too low',
                '*0'
            ),
            8 => array(
                '$6$rounds=1000000000$roundstoohigh',
                'the number of rounds is too high',
                '*0'
            ),
        );
        foreach ($tests as $iter => $t) {
            $res = crypt($t[1], $t[0]);
            if ($res != $t[2]) echo "Iteration $iter failed.
        Expected: <$t[2]>
        Got       <$res>\n";
        }
        $res = crypt($t[1], $t[0]);
        $arr = array(
        0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
        0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
        0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
        0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
        0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
        0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
        0x2020 => array(0x86, "DAGGER"),
        0x2021 => array(0x87, "DOUBLE DAGGER"),
        0x20AC => array(0x88, "EURO SIGN"),
        0x2030 => array(0x89, "PER MILLE SIGN"),
        0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
        0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
        0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
        0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
        0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
        0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
        0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
        0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
        0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
        0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
        0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
        0x2022 => array(0x95, "BULLET"),
        0x2013 => array(0x96, "EN DASH"),
        0x2014 => array(0x97, "EM DASH"),
        //0x98	      	#UNDEFINED
        0x2122 => array(0x99, "TRADE MARK SIGN"),
        0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
        0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
        0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
        0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
        0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
        0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
        0x00A0 => array(0xA0, "NO-BREAK SPACE"),
        0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
        0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
        0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
        0x00A4 => array(0xA4, "CURRENCY SIGN"),
        0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
        0x00A6 => array(0xA6, "BROKEN BAR"),
        0x00A7 => array(0xA7, "SECTION SIGN"),
        0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
        0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
        0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
        0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
        0x00AC => array(0xAC, "NOT SIGN"),
        0x00AD => array(0xAD, "SOFT HYPHEN"),
        0x00AE => array(0xAE, "REGISTERED SIGN"),
        0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
        0x00B0 => array(0xB0, "DEGREE SIGN"),
        0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
        0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
        0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
        0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
        0x00B5 => array(0xB5, "MICRO SIGN"),
        0x00B6 => array(0xB6, "PILCROW SIGN"),
        0x00B7 => array(0xB7, "MIDDLE DOT"),
        0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
        0x2116 => array(0xB9, "NUMERO SIGN"),
        0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
        0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
        0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
        0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
        0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
        0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
        0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
        0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
        0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
        0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
        0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
        0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
        0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
        0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
        0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
        0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
        0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
        0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
        0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
        0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
        0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
        0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
        0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
        0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
        0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
        0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
        0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
        0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
        0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
        0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
        0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
        0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
        0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
        0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
        0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
        0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
        0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
        0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
        0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
        0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
        0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
        0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
        0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
        0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
        0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
        0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
        0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
        0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
        0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
        0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
        0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
        0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
        0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
        0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
        0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
        0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
        0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
        0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
        0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
        0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
        0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
        0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
        0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
        0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
        0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
        0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
        0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
        0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
        0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
        0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
        );
        foreach ($arr as $u => $v) {
            $ent = sprintf("&#x%X;", $u);
            $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
            $d = unpack("H*", $res);
            echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);
        
            $ent = sprintf("&#x%X;", $v[0]);
            $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
            if ($res[0] != "&" || $res[1] != "#")
                $res = unpack("H*", $res)[1];
            echo sprintf("%s => %s\n\n", $ent, $res);
        }
        $ent = sprintf("&#x%X;", $v[0]);
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        $res = unpack("H*", $res)[1];
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOfBig = 'select * from t';
        $attrs = [ PDO::ATTR_PREFETCH => 0 ];
        $stmt = $pdo->prepare($reqOfBig, $attrs);
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar['a.php'] = '<php echo "this is a\n"; ?>';
        $r = new ReflectionClass('Test2');
        $m = $r->getStaticProperties();
        $m['data4'] = 400;
        $invalid_files = array(
          0,
          1234,
          -2.34555,
          TRUE,
          FALSE,
          " ",
        );
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
        $meta = mysqli_fetch_fields($res);
        $meta = $meta[0];
        $length = $meta->length;
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
        $unset_var = 10;
        $values = array(
                    // empty string
          /* 1  */  "",
                    '',
                    // objects
          /* 3  */  new test(),
        
                    // undefined variable
                    @$undefined_var,
        
                    // unset variable
          /* 5  */  @$unset_var,
        );
        for($index = 0; $index < count($values); $index ++)
        {
          echo "-- Iteration $counter --\n";
          $val = $values[$index];
        
          var_dump( array_fill($start_key , $num , $val) );
        
          $counter++;
        }
        $val = $values[$index];
        $counter = 1;
        $t = new Test;
        $container = false;
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
        $func_argvs = [
            [ 'bug_gh9090_void_none',         [ ]                           ],
            [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
            [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
        ];
        foreach ($func_argvs as $func_argv) {
                [ $func, $argv ] = $func_argv;
        
                $ok = true;
                try {
                    $ffi->$func_ptr = $ffi->$func;
                    call_user_func_array($ffi->$func_ptr, $argv);
                } catch (FFI\Exception $e) {
                    $ok = false;
                }
        
                printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
            }
        [ $func, $argv ] = $func_argv;
        $textascii = 'This is an "example" of using DOM splitText';
        );
        if (!$reader->open($fil
        ttributeNo(0);
                    echo $reade;
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname, 0, 'a.phar');
        $phar['x'] = 'hi';
        $a = new A();
        $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $stmt = $db->prepare("CALL testSp()");
        $result = $stmt->get_result();
        $var = '';
        $certificateGenerator = new CertificateGenerator();
        $s = "1234567890a";
        $compression = [
            'gz' => ['zlib.deflate', 'gzinflate'],
            'bz2' => ['bzip2.compress', 'bzdecompress']
        ];
        foreach ($compression as $ext => [$filter, $function]) {
            $stream = fopen(__DIR__ . "/75776.$ext", 'w');
            stream_filter_append($stream, $filter);
            fwrite($stream,"sdfgdfg");
            fflush($stream);
            fclose($stream);
        
            $compressed = file_get_contents(__DIR__ . "/75776.$ext");
            var_dump($function($compressed));
        }
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
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
        $array = [0];
        $ar = array_values($array);
        $ch = curl_init("https://localhost/username");
        $response = curl_exec($ch);
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $halves[0] = $halves[1] = 0;
        $doc = new \DOMDocument();
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $stmt1 = $pdo->query($reqOf3);
        $reflector = new ReflectionClass(C::class);
        for ($i = 0; $i < 2; $i++) {
            $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
            $obj->c = 1;
        }
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
        $obj->c = 1;
        $_SERVER = [ 'test' => 'test' ];
        $reference =& $_SERVER;
        $dbh = @pg_connect($conn_str);
        $I = new di('P10D');
        $I->unit = 42;
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_array = array(10);
        $varient_arrays = array (
          /* integers */
          543915,
          -5322,
          0x55F,
          -0xCCF,
          123,
          -0654,
        
          /* strings */
          "",
          '',
          "0",
          '0',
          'string',
          "string",
        
          /* floats */
          10.0000000000000000005,
          .5e6,
          -.5E7,
          .5E+8,
          -.5e+90,
          1e5,
        
          /* objects */
          new stdclass,
        
          /* resources */
          $fp,
          $dfp,
        
          /* nulls */
          null,
          NULL,
        
          /* boolean */
          true,
          TRUE,
          FALSE,
          false,
        
          /* unset/undefined arrays  */
          @$unset_array,
          @$undefined_array
        );
        $simpleInterval = new DateInterval("P2D");
        $tests = array(
            'noon', 'midnight'
        );
        foreach ($tests as $test) {
            $t = strtotime("2005-12-22 ". $test);
            printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
        }
        $t = strtotime("2005-12-22 ". $test);
        $varOutput = ob_get_contents();
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct(1);
        });
        $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            return new C(1);
        });
        $dom = new DOMDocument;
        $response = ob_get_contents();
        $doc = new \DOMDocument();
        $plain = "The quick brown fox jumps over the lazy dog.";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        $fp = php_cli_server_connect();
        $a = Array();
        $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
        $msgfmt2 = clone $msgfmt;
        $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
        $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
        list($value) = yield;
        $loop_counter = 1;
        $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
        
        $xmlstring = '<?xml ve;
        $arg = new Stdclass();
        test($arg)->name[1] = "xxxx";
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $mutable = \DateTime::createFromImmutable($immutable);
        $date = '7.8.2010';
        $unixtime = strtotime($date);
        $closure2 = new_closure_gen();
        $gen3 = $closure2();
        $host = PHP_CLI_SERVER_HOSTNAME;
        $cfg['main'] = <<<EOT
        [global]
        error_log = {{FILE:LOG}}
        log_level = notice
        include = {{INCLUDE:CONF}}
        EOT;
        $counter = 0;
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
        <books></books>';
        $tStamp = mktime (17, 17, 17, 10, 27, 2004);
        $strtotime_timestamp = strtotime ("Monday", $tStamp);
        $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
        $strA = 'test &amp; test';
        $strB = 'test & test';
        $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
        $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
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
        $from = "%#$*&@()";
        $tests = array(
            'noon', 'midnight'
        );
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        $_ENV = [];
    }
    $x = 1.0;
    $x += 0;
    return ++$x;
}
function f_3() {
    return 'B';
}
function f_4() {
    return true;
}
function f_5() {
    return $i;
}
function f_6() {
    return 42;
}
function f_7() {
    return "Object";
}
function f_8() {
    $unset_var = 10;
    $values = array(
    
          // int data
          0,
          1,
          12345,
          -2345,
    
          // float data
          10.5,
          -10.5,
          10.1234567e10,
          10.7654321E-10,
          .5,
    
          // array data
          array(),
          array(0),
          array(1),
          array(1, 2),
          array('color' => 'red', 'item' => 'pen'),
    
          // null data
          NULL,
          null,
    
          // boolean data
          true,
          false,
          TRUE,
          FALSE,
    
          // empty data
          "",
          '',
    
          // string data
          "string",
          'string',
    
          // undefined data
          $undefined_var,
    
          // unset data
          $unset_var,
    );
    $a = "lest";
    $a[0] = "t";
    return;
}
function f_9() {
    return "Object1";
}
function f_10() {
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    $mutable = \DateTime::createFromInterface($immutable);
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $mb=148;
    }
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
function f_12() {
    $ok = true;
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $counter = 1;
    }
    return 0;
}
$obj = new testObject();
for ($i_14 = 0; $i_14 < 10; $i_14++) {
    $dom = Dom\HTMLDocument::createEmpty();
}
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
var_dump(preg_replace_callback_array([], ''));
