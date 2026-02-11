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
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
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
function do_throw() { throw new Exception; }
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class A
{
    public function & __get($name)
    {
        return $this->test;
    }
}
class B extends A
{
    private $test;
}
function bar() {
    boo();
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
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function attach($db, $callback) { $db->setNoticeCallback($callback); }
class Box {
    public ?Test $value;
}
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
function t3()
{
    ob_start("test");
        echo "Hello from t3 1 ";
        ob_clean();
        echo "Hello from t3 2 ";
        ob_end_flush();
}
class D {
    public string $prop;
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
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
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
class A2 { // A1 with private function test
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
	private function test() {}
}
class B2 extends A2 {
	public function test(){	parent::test();	}
}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
function t2()
{
    ob_start("test");
    echo "Hello from t2 1 ";
        ob_flush();
        echo "Hello from t2 2 ";
        ob_end_flush();
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
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
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function gen() {
    yield 0;
    yield from gen();
}
class classA
{
  public function __toString() {
    return "key";
  }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
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
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
function lookup($s){
       return match($s){
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11,
        12 => 12,
        13 => 13,
        14 => 14,
        15 => 15,
        16 => 16,
        17 => 17,
        18 => 18,
        19 => 19,
        20 => 20,
        21 => 21,
        22 => 22,
        23 => 23,
        24 => 24,
        25 => 25,
        26 => 26,
        27 => 27,
        28 => 28,
        29 => 29,
        30 => 30,
        31 => 31,
        32 => 32,
        33 => 33,
        34 => 34,
        35 => 35,
        36 => 36,
        37 => 37,
        38 => 38,
        39 => 39,
        40 => 40,
        41 => 41,
        42 => 42,
        43 => 43,
        44 => 44,
        45 => 45,
        46 => 46,
        47 => 47,
        48 => 48,
        49 => 49,
        50 => 50,
        51 => 51,
        52 => 52,
        53 => 53,
        54 => 54,
        55 => 55,
        56 => 56,
        57 => 57,
        58 => 58,
        59 => 59,
        60 => 60,
        61 => 61,
        62 => 62,
        63 => 63,
        64 => 64,
        65 => 65,
        66 => 66,
        67 => 67,
        68 => 68,
        69 => 69,
        70 => 70,
        71 => 71,
        72 => 72,
        73 => 73,
        74 => 74,
        75 => 75,
        76 => 76,
        77 => 77,
        78 => 78,
        79 => 79,
        80 => 80,
        81 => 81,
        82 => 82,
        83 => 83,
        84 => 84,
        85 => 85,
        86 => 86,
        87 => 87,
        88 => 88,
        89 => 89,
        90 => 90,
        91 => 91,
        92 => 92,
        93 => 93,
        94 => 94,
        95 => 95,
        96 => 96,
        97 => 97,
        98 => 98,
        99 => 99,
        100 => 100,
        101 => 101,
        102 => 102,
        103 => 103,
        104 => 104,
        105 => 105,
        106 => 106,
        107 => 107,
        108 => 108,
        109 => 109,
        110 => 110,
        111 => 111,
        112 => 112,
        113 => 113,
        114 => 114,
        115 => 115,
        116 => 116,
        117 => 117,
        118 => 118,
        119 => 119,
        120 => 120,
        121 => 121,
        122 => 122,
        123 => 123,
        124 => 124,
        125 => 125,
        126 => 126,
        127 => 127,
        128 => 128,
        129 => 129,
        130 => 130,
        131 => 131,
        132 => 132,
        133 => 133,
        134 => 134,
        135 => 135,
        136 => 136,
        137 => 137,
        138 => 138,
        139 => 139,
        140 => 140,
        141 => 141,
        142 => 142,
        143 => 143,
        144 => 144,
        145 => 145,
        146 => 146,
        147 => 147,
        148 => 148,
        149 => 149,
        150 => 150,
        151 => 151,
        152 => 152,
        153 => 153,
        154 => 154,
        155 => 155,
        156 => 156,
        157 => 157,
        158 => 158,
        159 => 159,
        160 => 160,
        161 => 161,
        162 => 162,
        163 => 163,
        164 => 164,
        165 => 165,
        166 => 166,
        167 => 167,
        168 => 168,
        169 => 169,
        170 => 170,
        171 => 171,
        172 => 172,
        173 => 173,
        174 => 174,
        175 => 175,
        176 => 176,
        177 => 177,
        178 => 178,
        179 => 179,
        180 => 180,
        181 => 181,
        182 => 182,
        183 => 183,
        184 => 184,
        185 => 185,
        186 => 186,
        187 => 187,
        188 => 188,
        189 => 189,
        190 => 190,
        191 => 191,
        192 => 192,
        193 => 193,
        194 => 194,
        195 => 195,
        196 => 196,
        197 => 197,
        198 => 198,
        199 => 199,
        200 => 200,
        201 => 201,
        202 => 202,
        203 => 203,
        204 => 204,
        205 => 205,
        206 => 206,
        207 => 207,
        208 => 208,
        209 => 209,
        210 => 210,
        211 => 211,
        212 => 212,
        213 => 213,
        214 => 214,
        215 => 215,
        216 => 216,
        217 => 217,
        218 => 218,
        219 => 219,
        220 => 220,
        221 => 221,
        222 => 222,
        223 => 223,
        224 => 224,
        225 => 225,
        226 => 226,
        227 => 227,
        228 => 228,
        229 => 229,
        230 => 230,
        231 => 231,
        232 => 232,
        233 => 233,
        234 => 234,
        235 => 235,
        236 => 236,
        237 => 237,
        238 => 238,
        239 => 239,
        240 => 240,
        241 => 241,
        242 => 242,
        243 => 243,
        244 => 244,
        245 => 245,
        246 => 246,
        247 => 247,
        248 => 248,
        249 => 249,
        250 => 250,
        251 => 251,
        252 => 252,
        253 => 253,
        254 => 254,
        255 => 255,
        256 => 256,
        257 => 257,
        258 => 258,
        259 => 259,
        260 => 260,
        261 => 261,
        262 => 262,
        263 => 263,
        264 => 264,
        265 => 265,
        266 => 266,
        267 => 267,
        268 => 268,
        269 => 269,
        270 => 270,
        271 => 271,
        272 => 272,
        273 => 273,
        274 => 274,
        275 => 275,
        276 => 276,
        277 => 277,
        278 => 278,
        279 => 279,
        280 => 280,
        281 => 281,
        282 => 282,
        283 => 283,
        284 => 284,
        285 => 285,
        286 => 286,
        287 => 287,
        288 => 288,
        289 => 289,
        290 => 290,
        291 => 291,
        292 => 292,
        293 => 293,
        294 => 294,
        295 => 295,
        296 => 296,
        297 => 297,
        298 => 298,
        299 => 299,
        300 => 300,
        301 => 301,
        302 => 302,
        303 => 303,
        304 => 304,
        305 => 305,
        306 => 306,
        307 => 307,
        308 => 308,
        309 => 309,
        310 => 310,
        311 => 311,
        312 => 312,
        313 => 313,
        314 => 314,
        315 => 315,
        316 => 316,
        317 => 317,
        318 => 318,
        319 => 319,
        320 => 320,
        321 => 321,
        322 => 322,
        323 => 323,
        324 => 324,
        325 => 325,
        326 => 326,
        327 => 327,
        328 => 328,
        329 => 329,
        330 => 330,
        331 => 331,
        332 => 332,
        333 => 333,
        334 => 334,
        335 => 335,
        336 => 336,
        337 => 337,
        338 => 338,
        339 => 339,
        340 => 340,
        341 => 341,
        342 => 342,
        343 => 343,
        344 => 344,
        345 => 345,
        346 => 346,
        347 => 347,
        348 => 348,
        349 => 349,
        350 => 350,
        351 => 351,
        352 => 352,
        353 => 353,
        354 => 354,
        355 => 355,
        356 => 356,
        357 => 357,
        358 => 358,
        359 => 359,
        360 => 360,
        361 => 361,
        362 => 362,
        363 => 363,
        364 => 364,
        365 => 365,
        366 => 366,
        367 => 367,
        368 => 368,
        369 => 369,
        370 => 370,
        371 => 371,
        372 => 372,
        373 => 373,
        374 => 374,
        375 => 375,
        376 => 376,
        377 => 377,
        378 => 378,
        379 => 379,
        380 => 380,
        381 => 381,
        382 => 382,
        383 => 383,
        384 => 384,
        385 => 385,
        386 => 386,
        387 => 387,
        388 => 388,
        389 => 389,
        390 => 390,
        391 => 391,
        392 => 392,
        393 => 393,
        394 => 394,
        395 => 395,
        396 => 396,
        397 => 397,
        398 => 398,
        399 => 399,
        400 => 400,
        401 => 401,
        402 => 402,
        403 => 403,
        404 => 404,
        405 => 405,
        406 => 406,
        407 => 407,
        408 => 408,
        409 => 409,
        410 => 410,
        411 => 411,
        412 => 412,
        413 => 413,
        414 => 414,
        415 => 415,
        416 => 416,
        417 => 417,
        418 => 418,
        419 => 419,
        420 => 420,
        421 => 421,
        422 => 422,
        423 => 423,
        424 => 424,
        425 => 425,
        426 => 426,
        427 => 427,
        428 => 428,
        429 => 429,
        430 => 430,
        431 => 431,
        432 => 432,
        433 => 433,
        434 => 434,
        435 => 435,
        436 => 436,
        437 => 437,
        438 => 438,
        439 => 439,
        440 => 440,
        441 => 441,
        442 => 442,
        443 => 443,
        444 => 444,
        445 => 445,
        446 => 446,
        447 => 447,
        448 => 448,
        449 => 449,
        450 => 450,
        451 => 451,
        452 => 452,
        453 => 453,
        454 => 454,
        455 => 455,
        456 => 456,
        457 => 457,
        458 => 458,
        459 => 459,
        460 => 460,
        461 => 461,
        462 => 462,
        463 => 463,
        464 => 464,
        465 => 465,
        466 => 466,
        467 => 467,
        468 => 468,
        469 => 469,
        470 => 470,
        471 => 471,
        472 => 472,
        473 => 473,
        474 => 474,
        475 => 475,
        476 => 476,
        477 => 477,
        478 => 478,
        479 => 479,
        480 => 480,
        481 => 481,
        482 => 482,
        483 => 483,
        484 => 484,
        485 => 485,
        486 => 486,
        487 => 487,
        488 => 488,
        489 => 489,
        490 => 490,
        491 => 491,
        492 => 492,
        493 => 493,
        494 => 494,
        495 => 495,
        496 => 496,
        497 => 497,
        498 => 498,
        499 => 499,
        500 => 500,
        501 => 501,
        502 => 502,
        503 => 503,
        504 => 504,
        505 => 505,
        506 => 506,
        507 => 507,
        508 => 508,
        509 => 509,
        510 => 510,
        511 => 511,
        512 => 512,
        513 => 513,
    };
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
function offsetGet($x): mixed { var_dump($x); return 42; }
function f_0() {
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $references = array();
    $idx = 0;
    $references[$idx++]['id_copy']	= $row['id'];
    $now = new DateTimeImmutable();
    $simpleInterval = new DateInterval("P2D");
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize([
    		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
    		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
    	]);
    printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    $w->compressFiles(Phar::GZ);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->close();
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Charsetnr    : %d\n", $field->charsetnr);
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("b", 2);
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    $dom = new DOMDocument;
    $dom->loadXML(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 attr="x"/>
    </root>
    XML);
    debug_print_backtrace();
    printf("[002] [%d] %s\n", $link->errno, $link->error);
    set_error_handler(function($_, $m) { throw new Exception($m); });
    printf("printf test 18:%16b\n", 170);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now, true);
    var_dump($diff->invert, $diff->s, $diff->f);
    printf("printf test 25:%-2s\n", "gazonk");
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    test('Ghost', $obj);
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array($ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    $client->Add();
    $c("abc");
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    stream_wrapper_register('dummy', DummyWrapper::class);
    ob_start("test");
    $dom = new DOMDocument;
    $dom->loadXML(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 attr="x"/>
    </root>
    XML);
    $text = 'This is an ‘example’ of using DOM splitText';
    $start = 30;
    $length = 3;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->createTextNode($text);
    $matched = $node->splitText($start);
    $matched->splitText($length);
    var_dump(defined('SO_REUSEPORT'));
    $x = new X;
    $x->prop = 1;
    var_dump($x->prop);
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    printf("Content-Type Default OK" . PHP_EOL);
    var_dump(A::$x);
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(NULL));
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    var_dump(soundex("Hilbert"));
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%030.-15s", $tempstring));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "length: %d\n", count($r) );
    var_dump(soundex("Euler"));
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
    foreach ($varient_arrays as $type ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_array ($type) );
    }
    var_dump( is_array ($type) );
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    register_shutdown_function(function (): void {
        foreach (get_resources() as $res) {
            if (get_resource_type($res) === 'persistent stream') {
                echo "ERROR: persistent stream not closed\n";
                return;
            }
        }
        echo "OK: persistent stream closed\n";
    });
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
    $curl = curl_init("http://www.google.com");
    curl_exec($curl);
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
    var_dump($ffi->bug_gh16013_return_char());
    $dom = new DOMDocument();
    $dom->loadXML('<root><child/></root>');
    var_dump(foo());
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    setlocale(LC_ALL, "C");
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    $cert = "-----BEGIN CERTIFICATE-----
    MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
    VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
    AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
    MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
    BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
    aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
    AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
    /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
    RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
    Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
    vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
    8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
    CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
    aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
    lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
    pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
    FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
    FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
    -----END CERTIFICATE-----
    ";
    $pkey = "-----BEGIN PRIVATE KEY-----
    MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
    1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
    42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
    un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
    JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
    8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
    kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
    sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
    vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
    kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
    7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
    mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
    4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
    Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
    +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
    cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
    0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
    6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
    07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
    H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
    MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
    +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
    VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
    mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
    RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
    2WR7c6FhRCLxG0DObEOfiO0=
    -----END PRIVATE KEY-----
    ";
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array) );
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    var_dump(strncasecmp("test ", "E", -1));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    ini_set("session.save_handler","files");
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    unlink("$d1\\test1.txt");
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    test('<?php echo 3; // 4 ?>5');
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
    $before = memory_get_usage();
    $after = memory_get_usage();
    var_dump($before === $after);
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    printf("[005] [%d] %s\n", $link->errno, $link->error);
    php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    $zip = new ZipArchive();
    $zip->close();
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $old_cwd = getcwd();
    chdir($old_cwd);
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $offset3 = "offset";
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
    list($value) = yield;
    var_dump($value);
    $stmt->close();
    var_dump(ini_get('mysqlnd.debug'));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    for($i = 495; $i <= 1074; $i++) {
      ini_set('precision', $i);
      echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
    }
    ini_set('precision', $i);
    $sh = new SessionHandler;
    $sh->open('path', 'name');
    define("TEST",3);
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    mysqli_free_result($res);
    var_dump( strtok("\0") );
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    $db = PDOTest::factory();
    $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    set_exception_handler(null);
    $unset_var = 10;
    $fp = fopen(__FILE__, "r");
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
    var_dump($temp_array);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    var_dump(odbc_result($res, 'whatever'));
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $b = new B;
    var_dump($b->test);
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    var_dump(get_class_vars(C::class));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->stopBuffering();
    class_alias( 'stdClass', 'bool' );
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    bar();
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    foreach($vars as $var) {
      echo "-- Iteration $iterator --\n";
      $temp_array = $array;  // assign $array to another temporary $temp_array
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    printf("# %s\n", $name);
    $style = array();
    imagesetstyle($im, $style);
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    $obj = new testObject();
    $obj->setTest('test');
    printf("# Proxy:\n");
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    foreach ([false, true] as $emulate) {
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    
        try {
            $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
            $stmt->execute();
        } catch (PDOException $e) {
            var_dump('ERR');
        }
    
        $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
        $stmt->execute();
    
        var_dump($stmt->fetch());
    }
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    var_dump($i=1);
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
    fwrite($stream,"sdfgdfg");
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $reader->close();
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "teststring: %s\n", $r['teststring'] );
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
    ini_set('mysqlnd.fetch_data_copy', false);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
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
    var_dump($namespaceless->lookupNamespaceURI(NULL));
    $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
    $db->setNoticeCallback($callback);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $zip = new ZipArchive();
    $zip->close();
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 0, 0);
    var_dump(session_cache_limiter());
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $a = new A;
    var_dump($a);
    global $box;
    $box = new Box();
    test($box);
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    $link = mysqli_init();
    $japanese_so = pack('H4', '835c');
    var_dump($link->real_escape_string($japanese_so) === $japanese_so);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now);
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump( range(1, 7, fdiv(0, 0)) );
    printf("printf test 22:%016x\n", 170);
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($filename, $xmlstring);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 0 ]);
    $test1 = new B1;
    $test1->test();
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
    var_dump($body->lookupNamespaceURI("a"));
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
    test("http://t[est@[::1");
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    var_dump(spl_autoload_functions());
    var_dump(
            strnatcmp('foo ', 'foo '),
            strnatcmp('foo', 'foo'),
            strnatcmp(' foo', ' foo')
        );
    var_dump( range(7.0, 1.0, 6.5) );
    $t = new base();
    $t->test();
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testint: %d\n", $r['testint'] );
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
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
    restore_exception_handler();
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 2);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
    t3();
    printf("printf test 10: 123456789012345\n");
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    foreach ($dirs as $d) {
        mkdir($prefix . $d);
    }
    mkdir($prefix . $d);
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    var_dump(0);
    $host = "localhost\0.example.com";
    var_dump(gethostbynamel($host));
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    $link = mysqli_init();
    mysqli_close($link);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzpassthru($h);
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    ob_end_clean();
    $tempnum = 12345;
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
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
    foreach( $values as $value ) {
      echo "-- Iteration $counter --\n";
      debug_zval_dump( $value );
      $counter++;
    }
    debug_zval_dump( $value );
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    $d = new D();
    var_dump($d);
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
    $zip = new ZipArchive();
    $zip->close();
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML($html);
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
    $bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
        $cdata = $ffi->new('uint32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    ob_start();
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    var_dump($im);
    var_dump($obj->a);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    fclose($f);
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    test('Ghost', $obj);
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    get_basename_with_cp($d0, 65001);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    sprintf('%$s, %2$s %1$s', "a", "b");
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
    fwrite($stream,"sdfgdfg");
    mysqli_query($link, 'ALTER TABLE test DROP zero');
    foo();
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
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Length       : %d\n", $field->length);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    foreach ($dirs as $d) {
        mkdir($prefix . $d);
    }
    foreach ($dirs as $d) {
        $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    foreach ($dirs as $d) {
        rmdir($prefix . $d);
    }
    rmdir($prefix . $d);
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
    var_dump($pdo->query('SELECT 42')->fetchColumn(0));
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    extract(Foo::bar());
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $headers = ['Host: okey.com'];
    $httpContext = [
        'http' => [
            'protocol_version'	=> '1.1',
            'method'			=> 'GET',
            'header'			=> &$headers,
            'follow_location'	=> 0,
            'max_redirects'		=> 0,
            'ignore_errors'		=> true,
            'timeout'			=> 60,
        ],
    ];
    $context = stream_context_create($httpContext);
    print_r(stream_context_get_options($context));
    $im = ImageCreateTrueColor(10, 10);
    imagealphablending($im, true);
    test("http://t[est@::1]");
    $link = mysqli_init();
    mysqli_close($link);
    $_ = str_repeat("A", 512);
    openssl_seal($_, $_, $_, array_fill(0,64,0));
    mysqli_free_result($res);
    date_default_timezone_set("Europe/Lisbon");
    $GLOBALS['b'] = 2;
    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];
    var_dump($org_a, $org_b);
    var_dump(strncmp("test ", "e", -1));
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
    byRef(C[0]);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub();
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump(1);
    var_dump($br);
    $foo = new Foo;
    $baz = (float)$foo;
    var_dump($baz);
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    printf("printf test 17:%X\n", 170);
    chdir(__DIR__);
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    $db = createDB();
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
    var_dump($r);
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    $zip = new ZipArchive();
    $zip->extractTo(__DIR__);
    $ar1 = array(1, 2);
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $index_array = array (1, 2, 3);
    $assoc_array = array ('one' => 1, 'two' => 2);
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // array data
          'empty array' => array(),
          'int indexed array' => $index_array,
          'associative array' => $assoc_array,
          'nested arrays' => array('foo', $index_array, $assoc_array),
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_multisort($ar1, $value) );
        } catch (\ValueError | \TypeError $e) {
            echo $e->getMessage() . "\n";
        }
    }
    var_dump( array_multisort($ar1, $value) );
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    foreach($result as $val) {
        $val->dump();
    }
    $val->dump();
    var_dump($br);
    $invalid_files = array(
      0,
      1234,
      -2.34555,
      TRUE,
      FALSE,
      " ",
    );
    foreach( $invalid_files as $invalid_file ) {
      var_dump( is_executable($invalid_file) );
      clearstatcache();
    }
    var_dump( is_executable($invalid_file) );
    var_dump( range(1.0, 7.0, 0.0) );
    $list = new SplDoublyLinkedList();
    $list->push('o');
    var_dump("done");
    var_dump(self::$x);
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    var_dump( range(1.0, 7.0, 6.5) );
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t2 as select 678 n, 'ok' status");
    $zip = new ZipArchive();
    $zip->close();
    php_cli_server_start('http_response_code(422);');
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    touch("$d0\\test0.txt");
    $list = new SplDoublyLinkedList();
    $list->next();
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
    printf("printf test 13:%5d\n", -12);
    test();
    var_dump(__METHOD__);
    $test2 = new B2;
    $test2->test();
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    var_dump($rit->key());
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    var_dump($stmt->fetchAll());
    (new B)->bar();
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->start();
    $pdo = MySQLPDOTest::factory();
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    $o = new C;
    $o->foo();
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
    fclose($stream);
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $data = array_unique($data, flags: SORT_REGULAR);
    var_dump($data);
    $tester = new FPM\Tester($cfg);
    $tester->close();
    zerofill(2, $link, 'TINYINT');
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($contentfile);
    session_start();
    printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    var_dump(json_last_error() === JSON_ERROR_UTF16);
    global $box;
    $box = new Box();
    test($box);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
    zerofill(11, $link, 'DECIMAL');
    (new B)->foo();
    var_dump(foo());
    var_dump(preg_replace_callback_array([], ''));
    (new B)->baz();
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
        throw new \Exception('exception handler');
    });
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 1);
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
    var_dump($ffi->bug_gh16013_return_char());
    define ('foobar', 1);
    $im = imagecreate(800, 800);
    imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    $test('sensitive');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    rmdir($prefix);
    $db = MySQLPDOTest::factory();
    $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
    session_start();
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        return new C();
    });
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    $stmt->close();
    $list = new SplDoublyLinkedList;
    $list->add(0, new C);
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    $im = imagecreate(800, 800);
    imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    var_dump($http_response_header);
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
    var_dump($temp_array);
    __();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    var_dump(http_get_last_response_headers());
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    foreach($vars as $var) {
      echo "-- Iteration $iterator --\n";
      $temp_array = $array;  // assign $array to another temporary $temp_array
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
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
    ob_start(function() {
        declare(ticks=1);
        register_tick_function(
           function() { }
        );
    });
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    var_dump(file_exists($filename));
    zerofill(8, $link, 'FLOAT');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $obj = new C();
    var_dump($obj->a);
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    call_user_func("static::ok");
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        });
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $b->execute(array (5));
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    EOT;
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
    $h = <<<'EOD'
    void (*bug_gh9090_void_none_ptr)();
    void (*bug_gh9090_void_int_char_ptr)(int, char *);
    void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
    void (*bug_gh9090_void_char_int_ptr)(char *, int);
    int (*bug_gh9090_int_int_char_ptr)(int, char *);
    
    void bug_gh9090_void_none();
    void bug_gh9090_void_int_char(int i, char *s);
    void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
    EOD;
    $ffi = FFI::cdef($h);
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $func_argvs = [
        [ 'bug_gh9090_void_none',         [ ]                           ],
        [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
        [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
    ];
    foreach ($func_ptrs as $func_ptr) {
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
    }
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
    $ffi->$func_ptr = $ffi->$func;
    call_user_func_array($ffi->$func_ptr, $argv);
    $stmt->close();
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $date2 = new DateTime("Fri 19 November 2011");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    $list = new SplDoublyLinkedList();
    $list->next();
    t2();
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    test(1);
    test("http://test@[::1]");
    $reader = new XMLReader();
    $reader->close();
    error_reporting(E_ALL);
    mysqli_fetch_field($res);
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    register_shutdown_function(function () {
        echo "register_shutdown_function()\n";
        throw new \Exception('shutdown');
    });
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    var_dump(count(stat("$d0\\test0.txt")) > 0);
    ini_set("intl.error_level", E_WARNING);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    $obj = new C();
    var_dump($obj);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    mysqli_free_result($res);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    $obj = new C();
    var_dump($obj);
    set_exception_handler("foo");
    grapheme_stripos(1,1,2147483648);
    $server = new soapserver(null,array('uri'=>"http://testuri.org"));
    $HTTP_RAW_POST_DATA = <<<EOF
    <?xml version="1.0" encoding="ISO-8859-1"?>
    <SOAP-ENV:Envelope
      SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsd="http://www.w3.org/2001/XMLSchema"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:si="http://soapinterop.org/xsd">
      <SOAP-ENV:Body>
        <ns1:test xmlns:ns1="http://testuri.org"/>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    EOF;
    $server->handle($HTTP_RAW_POST_DATA);
    var_dump(soundex("Knuth"));
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    var_dump( range('A', 'H', 0) );
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
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
    var_dump($ffi->bug_gh16013_return_struct());
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    var_dump($im);
    var_dump($row['bit_column_1']);
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    printf("# %s\n", $name);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
    $mysqli->query($sql);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $dom = new DOMImplementation();
    $type = $dom->createDocumentType('html');
    var_dump($type->childNodes);
    var_dump(ob_get_contents());
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
    for($index = 0; $index < count($str_arr); $index++) {
      echo "-- Iteration $count --\n";
    
      $str = $str_arr[$index];  //getting the array element in 'str' variable
    
      //strtr() call in three args syntax form
      var_dump( strtr($str, $from, $to) );
    
      //strtr() call in two args syntax form
      var_dump( strtr($str, $replace_pairs) );
    
      $count++;
    }
    $str = $str_arr[$index];
    var_dump( strtr($str, $replace_pairs) );
    $arrays = array(
      array(),
      array(NULL),
      array(null),
      array(true),
      array(""),
      array(''),
      array(array(), array()),
      array(array(1, 2), array('a', 'b')),
      array(1 => 'One'),
      array("test" => "is_array"),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test')
    );
    foreach ($arrays as $var_array ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_array ($var_array) );
    }
    var_dump( is_array ($var_array) );
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
    $tester = new FPM\Tester($cfg);
    $tester->start();
    var_dump($arg);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    http_server_kill($pid);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    var_dump(pack('x') === "\0");
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($dom->saveHTML($node));
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    $im = ImageCreateTrueColor(10, 10);
    imagealphablending($im, true);
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -32, SEEK_CUR));
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    ob_clean();
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    $s = "1234567890a";
    $i = "010";
    var_dump($s[$i], isset($s[$i]));
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    test(1);
    define ('foobar', 1);
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $zip = new ZipArchive();
    $zip->close();
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
    php_cli_server_start('foo bar');
    var_dump($x);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    $a = array(1,2,3);
    $s1 = "some string";
    $c = $a + $s1;
    var_dump($c);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "manipulation combined with querying", function ($n) {
        $n->addAttribute("attr", "value");
        (bool) $n["attr"];
        $n->addChild("child", "value");
        $n->outer[]->inner = "foo";
        (bool) $n->outer;
        (bool) $n;
        isset($n->outer);
        isset($n["attr"]);
        unset($n->outer);
        unset($n["attr"]);
        unset($n->child);
    });
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    get_basename_with_cp($d0, 65001);
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $from = "%#$*&@()";
    $to = "specials";
    for($index = 0; $index < count($str_arr); $index++) {
      echo "-- Iteration $count --\n";
    
      $str = $str_arr[$index];  //getting the array element in 'str' variable
    
      //strtr() call in three args syntax form
      var_dump( strtr($str, $from, $to) );
    
      //strtr() call in two args syntax form
      var_dump( strtr($str, $replace_pairs) );
    
      $count++;
    }
    $str = $str_arr[$index];
    var_dump( strtr($str, $from, $to) );
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    var_dump($rit->key());
    restore_exception_handler();
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xmlns"));
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    zerofill(4, $link, 'MEDIUMINT');
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->request(connKeepAlive: true)->expectBody('1');
    $references = array();
    debug_zval_dump($references);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    var_dump(strncasecmp("test ", "E", 10));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
    clearstatcache();
    printf("printf test 13:%5d\n", -12);
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $InvMocker->addMatcher($OuterMatcher);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
    var_dump(foo());
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
    var_dump(exif_read_data($infile));
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    var_dump(substr($hash, -1, 1) !== "\0");
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    $dt = new DateTime('@1604215800');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    touch("$d0\\test0.txt");
    foo(false, false);
    var_dump(sprintf("%X", 12));
    ini_set('session.serialize_handler', 'php_serialize');
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    set_exception_handler(null);
    mt_srand(1234567890);
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test');
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    var_dump(sprintf("%X", 12));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    unlink("$d1\\test1.txt");
    setlocale(LC_ALL, "C");
    (new B)->foo();
    $dt = new DateTime('@1604215800');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
    $obj = unserialize('O:8:"00000000":');
    var_dump($obj);
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_mkdir($ftp, 'CVS'));
    $sixty = M_PI / 3.0;
    var_dump(sin($sixty));
    $rc = new ReflectionClass(B::class);
    var_dump($rc->getStaticProperties());
    mysqli_free_result($res);
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    register_shutdown_function('exploDe');
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $a[10] = "42";
    var_dump($a["010"], isset($a["010"]));
    $tempnum = 12345;
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    var_dump(getopt("abcd"));
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    $dir = opendir('foo://bar');
    closedir($dir);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_fetch_row($res);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, -1));
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
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $foo = new Foo;
    var_dump($foo);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                $trace_file,
                filesize($trace_file));
    var_dump(sprintf("%.988f", 1.23456789e10));
    global $box;
    $box = new Box();
    test($box);
    var_dump(foo());
    $array_object = array();
    var_dump( end($array_object) );
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    var_dump($rit->valid());
    set_exception_handler(function() {
        echo 'First handler' . PHP_EOL;
    });
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
    stream_filter_append($stream, $filter);
    stream_filter_register('user_filter','user_filter');
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    unlink($trace_file);
    $obj = new C();
    var_dump($obj);
    bar();
    test(1);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->close();
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    test('sensitive');
    $output = array();
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 6);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $zip = new ZipArchive();
    $zip->open($filename);
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump(sprintf("%.988f", 1.23456789e10));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $stmt->execute();
    var_dump(strncasecmp("test ", "E", -1));
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[008] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    register_shutdown_function('ABC');
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    printf("printf test 16:%x\n", 170);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
    undefined_function();
    restore_exception_handler();
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
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $it->next();
    printf("printf test 16:%x\n", 170);
    var_dump( range('A', 'H', 0.0) );
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testtable'];
    printf( "testtable: %d\n", $r2['major'] );
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t values (0, 'original')");
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    $blank_line = <<<EOD
    
    EOD;
    $needles = array(
      "\n",
      '\n',
      "\r",
      "\r\n",
      "\t",
      "",
      $blank_line //needle as haystack
    );
    foreach($needles as $needle) {
      var_dump( strrchr($blank_line, $needle) );
    }
    var_dump( strrchr($blank_line, $needle) );
    $obj = new Test;
    var_dump($obj);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} finally {
    		print "handle first\n";
    		return "ok";
    	}
    })();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
    printf("[008] PS and non-PS results differ, dumping data\n");
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    test();
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->query("DROP TABLE temp");
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
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
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    http_server_kill($pid);
    printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
                $host, $user, $db, $port, $socket);
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
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
    var_dump($body->lookupNamespaceURI("a"));
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    var_dump($prop->getRawValue($a));
    printf("printf test 24:%.5s\n", "abcdefghij");
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 0, 0);
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    printf("printf test 22:%016x\n", 170);
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
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
    foreach($inputs as $input) {
      echo "\n-- Iteration $iterator --\n";
      try {
          var_dump( array_key_exists($input, $search) );
      } catch (TypeError $exception) {
          echo $exception->getMessage() . "\n";
      }
      $iterator++;
    }
    var_dump( array_key_exists($input, $search) );
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
    $array = new ArrayObject();
    var_dump($array->offsetExists('nokey'));
    var_dump(-9_223_372_036_860_776_000 % -1);
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
    stream_filter_append($stream, $filter);
    printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->stopBuffering();
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    time_nanosleep(0, 1000000000);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
    var_dump( range('A', 'H', 0) );
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        return new C();
    });
    var_dump(@$obj->dynamic++);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    test("http://t[est@127.0.0.1");
    var_dump(0);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
    $b = new B;
    var_dump($b->test);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
    date_default_timezone_set("UTC");
    var_dump( $count );
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
    var_dump($ffi->bug_gh16013_return_struct());
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $offset3 = PHP_INT_MAX * 16;
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    ini_set("intl.error_level", E_WARNING);
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
    $dt = new DateTime('@1604215800');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    $array = [
        [
        'superhero'=> 'superman',
        'nanana' => 'no nana'
        ],
        [
        'superhero'=> 'acuaman',
        'nanana' => 'no nana'
        ],
    
        ];
    var_dump(array_column($array, 'superhero'));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    rmdir($d1);
    printf("# %s:\n", $name);
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    var_dump(foo());
    test([0], [1], [2]);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    class_alias( 'stdClass', 'bool' );
    var_dump(soundex("Knuth")       == soundex("Kant"));
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
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->start();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "children", fn ($n) => $n->children());
    $style = array();
    imagesetstyle($im, $style);
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $stmt->execute();
    foo();
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    var_dump($h1->length);
    $db = MySQLPDOTest::factory();
    foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
        print_r($row);
    }
    print_r($row);
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
    var_dump($body->lookupNamespaceURI(""));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    mkdir($d0);
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    rmdir($d0);
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    clearstatcache();
    $document = new \DOMDocument();
    var_dump($document->saveHTML());
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
    mysqli_free_result($res);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books></books>';
    file_put_contents($filename, $xmlstring);
    $arr = array(
        range(1, 5),
        range(1, 5),
        range(1, 5),
        range(1, 5),
        range(1, 5),
    );
    array_walk_recursive($arr,
        function (&$value, $key) use(&$arr) {
            var_dump($key);
            unset($arr[$key]);
        }
    );
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
    $db = getDbConnection();
    $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
    catch (PDOException $e) {
        var_dump($e->getCode());
    }
    var_dump($e->getCode());
    $ch = curl_init();
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    rename("phar://a.phar/x", "phar://a.phar/y");
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("b", 2);
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    var_dump($rit->valid());
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $date]);
    $heredoc_string = <<<EOT
    This is line 1 of 'heredoc' string
    This is line 2 of "heredoc" string
    EOT;
    $heredoc_null_string =<<<EOT
    EOT;
    $str_array = array(
                        // string without any characters that can be backslashed
                        'Hello world',
    
                        // string with single quotes
                        "how're you doing?",
                        "don't disturb u'r neighbours",
                        "don't disturb u'r neighbours''",
                        '',
                        '\'',
                        "'",
    
                        // string with double quotes
                        'he said, "he will be on leave"',
                        'he said, ""he will be on leave"',
                        '"""PHP"""',
                        "",
                        "\"",
                        '"',
                "hello\"",
    
                        // string with backslash characters
                        'Is your name Ram\Krishna?',
                        '\\0.0.0.0',
                        'c:\php\testcase\addslashes',
                        '\\',
    
                        // string with nul characters
                        'hello'.chr(0).'world',
                        chr(0).'hello'.chr(0),
                        chr(0).chr(0).'hello',
                        chr(0),
    
                        // mixed strings
                        "'\\0.0.0.0'",
                        "'\\0.0.0.0'".chr(0),
                        chr(0)."'c:\php\'",
                        '"\\0.0.0.0"',
                        '"c:\php\"'.chr(0)."'",
                        '"hello"'."'world'".chr(0).'//',
    
                // string with hexadecimal number
                        "0xABCDEF0123456789",
                        "\x00",
                        '!@#$%&*@$%#&/;:,<>',
                        "hello\x00world",
    
                        // heredoc strings
                        $heredoc_string,
                        $heredoc_null_string
                      );
    foreach( $str_array as $str )  {
      echo "\n-- Iteration $count --\n";
      var_dump( addslashes($str) );
      $count ++;
    }
    var_dump( addslashes($str) );
    var_dump(strncasecmp("test ", "E", 10));
    ob_end_clean();
    test(1);
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
    var_dump(strncmp("test ", "e", 10));
    $canary = new Canary(null);
    $iterable = f($canary);
    $iterable->current();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    printf("printf test 20:%16X\n", 170);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {});
    var_dump($obj);
    $a = new Test();
    $a->TestFunc();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    $callable($nodes);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    foreach($vars as $var) {
      echo "-- Iteration $iterator --\n";
      $temp_array = $array;  // assign $array to another temporary $temp_array
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    $array = new ArrayObject();
    $array->offsetSet('key', 'value');
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 0, 0);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML($html);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
    foo(false, true);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    zerofill(9, $link, 'DOUBLE');
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    var_dump($stmt->fetch());
    printf("printf test 18:%16b\n", 170);
    global $list;
    $list->pop();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    var_dump(ini_get('mysqlnd.debug'));
    set_exception_handler(null);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t (n int, t text)");
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
    var_dump ( rtrim("rtrim test   \t\0 ") );
    $b = new B();
    $b->aa();
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 0, 1, 0);
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
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $zip = new ZipArchive();
    $zip->addFromString('foo.txt', 'foo bar foobar');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $db = MySQLPDOTest::factory();
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    test('sensitive');
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
    var_dump((new Exception)->getTrace());
    var_dump(baz());
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
    $t = new base();
    $t->test();
    (new B)->foo();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    var_dump(test());
    var_dump(range('z', 'a', 100));
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    var_dump($h1->length);
    printf("# Proxy:\n");
    $db = PDOTest::factory();
    $db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
    printf("printf test 2:%d\n", 42);
    var_dump(c1::$a3);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    var_dump($list->offsetExists($x));
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[008] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $headers = $client->__getLastRequestHeaders();
    printf("Content-Type NOK %s" . PHP_EOL, $headers);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $sibling->common();
    zerofill(9, $link, 'DOUBLE');
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    var_dump($row);
    printf("[%03d] Length reported is too small to run test\n", $offset);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    var_dump(count(stat("$d0\\test0.txt")) > 0);
    t2();
    $tester = new FPM\Tester($cfg);
    $tester->terminate();
    var_dump( range('A', 'H', 0) );
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    foreach($result as $val) {
        $val->dump();
    }
    $val->dump();
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut2);
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    $array_object = array();
    var_dump( end($array_object) );
    ini_set('mysqlnd.fetch_data_copy', false);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "html", "3"));
    $list = new SplDoublyLinkedList;
    var_dump($list->serialize());
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(""));
    var_dump(__METHOD__);
    print_r($str_instead);
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
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
    var_dump($namespaceless->lookupNamespaceURI(NULL));
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
    $browser=get_browser(NULL, true);
    print_r($browser);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Name         : %s\n", $field->name);
    grapheme_strpos(1,1,2147483648);
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $row = mysqli_fetch_assoc($res);
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    $expected = str_repeat('0', $length - strlen($insert));
    $expected .= $insert;
    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
    $rf = new ReflectionFunction('collator_get_sort_key');
    var_dump($rf->getNumberOfParameters());
    $now = new DateTimeImmutable();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $canary = new Canary(null);
    $iterable = f($canary);
    $iterable->current();
    var_dump(http_get_last_response_headers());
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
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
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
    var_dump(A::$x);
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    var_dump(
            strnatcmp('foo ', 'foo '),
            strnatcmp('foo', 'foo'),
            strnatcmp(' foo', ' foo')
        );
    session_start();
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
    $mysqli->query($sql);
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    var_dump(c1::$a1);
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    var_dump($rit->key());
    mysqli_close($link);
    printf("# Ghost:\n");
    var_dump ( rtrim("rtrim test   " , "") );
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $db->query(<<<'SQL'
    CREATE
        PROCEDURE `testSp`()
    	BEGIN
    		DECLARE `cur` CURSOR FOR SELECT 1;
    		OPEN `cur`;
    		CLOSE `cur`;
    		SELECT 1;
    	END;
    SQL);
    var_dump ( rtrim("rtrim test        ", true) );
    var_dump(error_reporting());
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    var_dump($c);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
    $filename = "bug51997.bz2";
    unlink($filename);
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    var_dump(soundex("Euler")       == soundex("Ellery"));
    $sixty = M_PI / 3.0;
    var_dump(sin($sixty));
    $im = ImageCreateTrueColor(10, 10);
    imagealphablending($im, true);
    var_dump("hello");
    $curl = curl_init("http://www.google.com");
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
    $d = new D();
    var_dump($d);
    print_r($str_instead);
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
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
    krsort($flags);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->nextRowset());
    printf("# %s\n", $name);
    define('OBJECT_COUNT', 10000);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
    ob_end_flush();
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    $descriptorspec = [STDIN, STDOUT, STDOUT];
    for ($i = 1; $i <= 255; $i++) {
      echo "Testing $i\n";
      try {
        $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
        var_dump($proc);
        proc_close($proc);
      } catch (Error) {}
    }
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($proc);
    $array_object = array();
    var_dump($array_object);
    $sixty = M_PI / 3.0;
    var_dump(sin($sixty));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastRequestHeaders());
    rename("phar://a.phar/x", "phar://a.phar/y");
    var_dump($x);
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump(http_get_last_response_headers());
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
    var_dump(exif_read_data($infile));
    class_alias( 'stdClass', 'bool' );
    $gen = gen();
    $a = bar($gen);
    $a->next();
    mysqli_close($link);
    $zip = new ZipArchive();
    $zip->setPassword('bar');
    $document = new \DOMDocument();
    var_dump($document->saveHTML());
    var_dump(sprintf("%.988f", 1.23456789e10));
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump($data);
    $id_1_date = '2014-09-23';
    $id_2_date = '2014-09-24';
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    $obj = new C();
    var_dump($obj);
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['used_memory'] + $info['free_memory']);
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    ob_start("test");
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->close();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "children", fn ($n) => $n->children());
    zerofill(8, $link, 'FLOAT');
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    printf("printf test 14:%c\n", 64);
    $browser=get_browser(NULL, true);
    print_r($browser);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "length: %d\n", count($r) );
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
    $x = (object)['y' => 'foobar'];
    var_dump(test($x));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    $blank_line = <<<EOD
    
    EOD;
    $needles = array(
      "\n",
      '\n',
      "\r",
      "\r\n",
      "\t",
      "",
      $blank_line //needle as haystack
    );
    foreach($needles as $needle) {
      var_dump( strrchr($blank_line, $needle) );
    }
    var_dump( strrchr($blank_line, $needle) );
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    foreach($vars as $var) {
      echo "-- Iteration $iterator --\n";
      $temp_array = $array;  // assign $array to another temporary $temp_array
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->execute();
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $html = simplexml_import_dom($tag);
    var_dump($html);
    $a = new Test();
    var_dump($a->value);
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
    printf("Content-Type OK" . PHP_EOL);
    $pem_cert = '
    -----BEGIN CERTIFICATE-----
    MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
    UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
    ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
    L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
    VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
    DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
    6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
    MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
    NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
    Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
    KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
    MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
    HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
    XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
    l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
    +Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
    QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
    AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
    FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
    dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
    y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
    LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
    MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
    ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
    c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
    MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
    L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
    BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
    ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
    J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
    HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
    Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
    lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
    -----END CERTIFICATE-----
    ';
    var_dump(openssl_x509_parse($pem_cert));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $tester = new FPM\Tester($cfg);
    $tester->close();
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
    $class = new SomeClass;
    $arr = [$class];
    var_dump(json_encode($arr));
    $tz1 = new DateTimeZone('Europe/Berlin');
    $tz2 = new DateTimeZone('Europe/Berlin');
    $d = new DateTime('2014-12-24 13:00:00', $tz1);
    var_dump($d->getTimezone(), $tz2);
    $list = [];
    asort($list);
    $dt = new DateTime('@1604215800');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    get_basename_with_cp($d0, 65001);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    gc_collect_cycles();
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $rc = new ReflectionClass(B::class);
    var_dump($rc->getStaticProperties());
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    var_dump(odbc_result($res, 'whatever'));
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    $b = new C;
    $b->bar();
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->close();
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    foreach ($dirs as $d) {
        mkdir($prefix . $d);
    }
    foreach ($dirs as $d) {
        $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    $now = $prefix . $d;
    var_dump(chdir($now));
    $empty_webp = __DIR__ . "/gh13774.webp";
    file_put_contents($empty_webp, "");
    $textascii = 'This is an "example" of using DOM splitText';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->createTextNode($textascii);
    $dom->appendChild($node);
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $it->next();
    var_dump(getopt("abcd"));
    $host = "localhost\0.example.com";
    var_dump(gethostbyname($host));
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    printf("printf test 21:%016b\n", 170);
    var_dump(c1::$a2);
    register_shutdown_function('ABC');
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    printf("printf test 20:%16X\n", 170);
    var_dump(soundex("Gauss"));
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    var_dump($prop->getRawValue($a));
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
    foreach( $values as $value ) {
      echo "-- Iteration $counter --\n";
      debug_zval_dump( $value );
      $counter++;
    }
    debug_zval_dump( $value );
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->close();
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    var_dump($obj);
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array) );
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
    var_dump($arg);
    test('<?php echo "1";//2');
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    catch (\PDOException $e) {
      var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_USERNAME, null);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books></books>';
    file_put_contents($filename, $xmlstring);
    mysqli_close($link);
    var_dump(mysqli_get_server_version($link));
    for($i = 495; $i <= 1074; $i++) {
      ini_set('precision', $i);
      echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
    }
    ini_set('precision', $i);
    var_dump( range(1.0, 7.0, 0.0) );
    $arrays = array(
      array(),
      array(NULL),
      array(null),
      array(true),
      array(""),
      array(''),
      array(array(), array()),
      array(array(1, 2), array('a', 'b')),
      array(1 => 'One'),
      array("test" => "is_array"),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test')
    );
    foreach ($arrays as $var_array ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_array ($var_array) );
    }
    var_dump( is_array ($var_array) );
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    $test2 = new B2;
    $test2->test();
    var_dump( range(1.0, 7.0, 6.5) );
    $c = "assert";
    $c(false);
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
    var_dump($ffi->bug_gh16013_return_char());
    $s = "1234567890a";
    var_dump($s["010"], isset($s["010"]));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    rmdir($d1);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setPattern('VV');
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    $db = MySQLPDOTest::factory();
    foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
        print_r($row);
    }
    print_r($row);
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Flags        : %d\n", $field->flags);
    printf("# %s\n", $name);
    $db = MySQLPDOTest::factory();
    var_dump($db->query('SELECT * FROM test_33689'));
    $o = new C;
    $o->foo();
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI("a"));
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    var_dump(strlen(file_get_contents('php://input')));
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    php_cli_server_start($code, null, $args);
    $tester = new FPM\Tester($cfg);
    $tester->start();
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    var_dump(count($cert_data['extracerts']));
    $cl = new bug8318;
    $cl->fpassthru();
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
    $rc = new ReflectionClass(B::class);
    var_dump($rc->getStaticProperties());
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    trycatch_dump(
        fn() => imagecreatefromgd2part($file, 0,0, -25, 10),
        fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
    );
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
    printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                        $missing_flags, $field->name, $flags_found);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    $client->Add();
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    var_dump($_SESSION);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(NULL));
    mt_srand(1234567890);
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    var_dump(lookup(513));
    set_exception_handler(function() {
        echo 'Fourth handler' . PHP_EOL;
    });
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_mkdir($ftp, 'CVS'));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Table        : %s\n", $field->table);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    spl_autoload_register($callback2);
    ob_start();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    $zip = new ZipArchive();
    $zip->extractTo(__DIR__);
    var_dump(array_pop($input), $input);
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $db->prepare("SELECT 1");
    var_dump($stmt->execute([1]));
    var_dump($line);
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->resume();
    var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_USERNAME, null);
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
    $arrays = array (
      array( 0 ),
      range(1, 100 ),
      range('a', 'z', 2 ),
      array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
      array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
      array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
      array(1.0005, 2.000000, -3.000000, -4.9999999 ),
      array(true, false),
      array("PHP", "Web2.0", "SOA"),
      array(1, array() ),
      array(1, 2, "" ),
      array(" "),
      array(2147483647, 2147483648, -2147483647, -2147483648 ),
      array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
      array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
    );
    foreach ($arrays as $sub_array){
      echo "-- Iteration $counter --\n";
      var_dump( end($sub_array) );
      /* ensure that internal pointer is moved to last element */
      var_dump( current($sub_array) );
      $counter++;
    }
    var_dump( end($sub_array) );
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastRequestHeaders());
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    $fp = tmpfile();
    rewind($fp);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    var_dump( range('A', 'H', fdiv(0, 0)) );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    unlink("$d0\\test0.txt");
    $arr = array('a', 'b');
    $arr();
    $_ = str_repeat("A", 512);
    openssl_seal($_, $_, $_, array_fill(0,64,0));
    $array1 = array(1, 2);
    $data_comp_func = 'compare_function';
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_udiff($array1, $value, $data_comp_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_udiff($array1, $value, $data_comp_func) );
    set_exception_handler(null);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Charsetnr    : %d\n", $field->charsetnr);
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    $counter = 0;
    ob_start(function ($buffer) use (&$c, &$counter) {
            $c = 0;
            ++$counter;
    }, 1);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $references = array();
    debug_zval_dump($references);
    pcntl_sigwaitinfo($a,$a);
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $root->__construct("malformed");
    var_dump(foo());
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
    ob_end_clean();
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    test(1);
    $list = new SplDoublyLinkedList;
    $list->add(1, 1);
    $id_1_date = '2014-09-23';
    $id_2_date = '2014-09-24';
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzpassthru($h);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    mkdir($prefix);
    $a=glob("./*.jpeg");
    var_dump($a);
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 2);
    define("TEST",2);
    var_dump(defined('SO_REUSEPORT'));
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
    $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
    printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Table        : %s\n", $field->table);
    var_dump(sprintf("%%", 1.23456789e10));
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump($row);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->bind_result($id);
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    printf("printf test 19:%16x\n", 170);
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    var_dump($stmt->fetchAll());
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:html"));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "attributes", fn ($n) => $n->attributes());
    $db = MySQLPDOTest::factory();
    var_dump($db->query('SELECT * FROM test_33689'));
    $dest = __DIR__ . "/bug40228";
    $zip = new ZipArchive;
    $zip->extractTo($dest);
    var_dump(debug_backtrace());
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    $test2 = new B2;
    $test2->test();
    var_dump($arg);
    var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    var_dump( current($resources) );
    $a=glob("./*.jpeg");
    var_dump($a);
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    mysqli_free_result($res);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    fclose($fp);
    var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
    (new B)->bar();
    var_dump($br);
    php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    var_dump($im);
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    
    });
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    printf("printf test 31:%.17g\n", INF);
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    var_dump( end($resources) );
    var_dump(c1::$a2);
    var_dump($row[0]);
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    var_dump(@$obj->dynamic++);
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    $t->cleanRepair();
    mysqli_close($link);
    printf("# %s\n", $name);
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    spl_autoload_register(function ($name) {
        spl_autoload_unregister("spl_autoload_call");
    });
    var_dump(
            strnatcmp('foo ', 'foo '),
            strnatcmp('foo', 'foo'),
            strnatcmp(' foo', ' foo')
        );
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    $im = imagecreate(800, 800);
    imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_binmode($res, ODBC_BINMODE_RETURN);
    $obj = new C();
    var_dump($obj);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    $fn = "bug71263.bz2";
    unlink($fn);
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
    var_dump( array_intersect($arr1, $arr2) );
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 0 ]);
    $a = new A;
    var_dump(serialize($a));
    $im = imagecreate(800, 800);
    imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
    $ch = curl_init("https://localhost/userpwd");
    $response = curl_exec($ch);
    var_dump(str_contains($response, "authorization"));
    bar();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $db = createDB();
    testLastInsertId($db);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    var_dump($i=1);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    bar();
    pcntl_sigwaitinfo($a,$a);
    $link->close();
    var_dump(new FooBar);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $headers = $client->__getLastRequestHeaders();
    printf("Content-Type NOK %s" . PHP_EOL, $headers);
    t2();
    $dbh = @pg_connect($conn_str);
    _set_lc_messages($dbh);
    var_dump( range(1, 7, 0) );
    ini_set("soap.wsdl_cache_enabled",0);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    http_server_kill($pid);
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    $im = ImageCreateTrueColor(10, 10);
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    ImageFillToBorder($im, 5, 5, $bordercolor, $color);
    foo();
    var_dump($obj);
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    ob_end_flush();
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Flags        : %d\n", $field->flags);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $cl = new bug8318;
    $cl->fpassthru();
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    var_dump($foo[0]);
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    print_r($str_instead);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    printf("printf test 2:%d\n", 42);
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    imagesetthickness($im, $thickness);
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    catch (\PDOException $e) {
      var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 1);
    var_dump(unserialize(serialize($obj)));
    $obj = new string1;
    var_dump( rtrim($obj, "tc") );
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array) );
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} finally {
    		print "handle first\n";
    		return "ok";
    	}
    })();
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    $responses = array(
        "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
        . "Location: /try-again\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "0\r\n\r\n",
        "data://text/plain,HTTP/1.1 200 Ok\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "4\r\n1234\r\n0\r\n\r\n",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    var_dump(file_get_contents($uri));
    error_reporting(E_ALL);
    register_shutdown_function('ABC');
    $cert = file_get_contents(__DIR__ . "/public.crt");
    $priv = file_get_contents(__DIR__ . "/private.crt");
    $extracert = file_get_contents(__DIR__ . "/cert.crt");
    $pass = "qwerty";
    openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
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
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    printf("printf test 10: 123456789012345\n");
    var_dump(range('a', 'z', 100));
    $references = array();
    debug_zval_dump($references);
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    printf("printf test 11: 123456789012345678901234567890\n");
    $a = new A();
    $a->test("test");
    $ch = curl_init();
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    $gen = gen();
    $a = bar($gen);
    $a->next();
    $h = <<<'EOD'
    void (*bug_gh9090_void_none_ptr)();
    void (*bug_gh9090_void_int_char_ptr)(int, char *);
    void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
    void (*bug_gh9090_void_char_int_ptr)(char *, int);
    int (*bug_gh9090_int_int_char_ptr)(int, char *);
    
    void bug_gh9090_void_none();
    void bug_gh9090_void_int_char(int i, char *s);
    void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
    EOD;
    $ffi = FFI::cdef($h);
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $func_argvs = [
        [ 'bug_gh9090_void_none',         [ ]                           ],
        [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
        [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
    ];
    foreach ($func_ptrs as $func_ptr) {
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
    }
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
    $ffi->$func_ptr = $ffi->$func;
    call_user_func_array($ffi->$func_ptr, $argv);
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
    var_dump($ffi->bug_gh16013_return_struct());
    var_dump($x);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $f = function () {};
    $f->__invoke(do_throw());
    $res = [];
    display($res);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->close();
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
    var_dump($r);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    $list = new SplDoublyLinkedList;
    var_dump($list->serialize());
    set_error_handler(function($no, $msg) {
        throw new Exception($msg);
    });
    printf("printf test 31:%.17g\n", INF);
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
    var_dump($pdo->query('SELECT 42')->fetchColumn(0));
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
    $db = createDB();
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    global $box;
    $box = new Box();
    test($box);
    $s = 'C:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    catch (PDOException $e) {
        var_dump($e->getCode());
    }
    var_dump($e->getCode());
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump($data);
    var_dump(substr_count("", "a", 0, 0));
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
    $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
    printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
}
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
