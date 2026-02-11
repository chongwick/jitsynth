<?php
function test($s, $mode)
{
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
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
class Foo {
  public $bar = "bat";
}
function byVal($arg) {
    var_dump($arg);
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
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
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
function do_throw() { throw new Exception; }
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
class D {
    public string $prop;
}
function crash()
{
    $notDefined[$i] = 'test';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
class IVREvents {
  public $version;
  public $activityId;
  public $messageId;
  public $source;
  public $logOnEvent;
  public $logOffEvent;

  function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
    $this->version = $version;
    $this->activityId = $activityId;
    $this->messageId = $messageId;
    $this->source = $source;
    $this->logOnEvent = $logOnEvent;
    $this->logOffEvent = $logOffEvent;
  }
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
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
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
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
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
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
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
class Box {
    public ?Test $value;
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
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
class string1 {
  public function __toString() {
    return "Object";
  }
}
class FooBar implements ArrayAccess {
    private $array = array();

    public function offsetExists($index): bool {
        return isset($this->array[$index]);
    }

    public function offsetGet($index): mixed {
        return $this->array[$index];
    }

    public function offsetSet($index, $value): void {
        echo __METHOD__ . "($index, $value)\n";
        $this->array[$index] = $value;
    }

    public function offsetUnset($index): void {
        throw new Exception('FAIL');
        unset($this->array[$index]);
    }

}
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
function callback(&$a, &$b, $c) {
        $b = 1;
    }
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
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
function unserialize($data) {
        session_decode($data);
    }
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
function gen() {
    yield 0;
    yield from gen();
}
$fn = "bug71263.bz2";
function f_0() {
    if (true) {
        return false;
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_1() {
    function f_2() {
        $style = array();
        $i = 0;
        $style[$i++] = IMG_COLOR_TRANSPARENT;
        return 42;
    }
    function f_3() {
        $r = new ResourceBundle( 'en_US', BUNDLE );
        printf( "testint: %d\n", $r['testint'] );
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->setDefaultStub(str_repeat('a', 400));
        $text = 'This is an ‘example’ of using DOM splitText';
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->createTextNode($text);
        $dom->appendChild($node);
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
        var_dump(`$php -n -v`);
    }
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    var_dump($dom->getElementById('x')?->nodeName);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    if (true) {
        return 0;
    }
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    $b = new B;
    var_dump($b->test);
    $foo = new Foo;
    var_dump($foo);
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
}
$tStamp = mktime (17, 17, 17, 10, 27, 2004);
$strtotime_timestamp = strtotime ("Monday", $tStamp);
var_dump(foo());
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
var_dump($obj);
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
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
byVal(C[0]);
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "attributes", fn ($n) => $n->attributes());
$dom = new DOMDocument();
$xpath = new DOMXpath($dom);
foreach($xpath->query('/root/noexist') as $child) {
    var_dump($child);
}
var_dump($child);
$im = imagecreatetruecolor(1, 1);
imagescale($im, 0, 1, 0);
pcntl_sigwaitinfo($a,$a);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
$obj = new C();
var_dump($obj->a);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
var_dump($res);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$db = createDB();
$db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump($array);
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
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
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
$tester->expectLogStartNotices();
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
var_dump( range(1, 7, fdiv(0, 0)) );
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$references = array();
debug_zval_dump($references);
openssl_error_string();
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function () {});
printf("printf test 24:%.5s\n", "abcdefghij");
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
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
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
imagesetthickness($im, $thickness);
$pdo = MySQLPDOTest::factory();
$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
var_dump(A::fromArray(['a' => 'foo']));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testint: %d\n", $r['testint'] );
var_dump( range('A', 'H', 10.0**400) );
var_dump($arg);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
var_dump(-2147483648 % -1);
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value) );
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$tag->append("foo");
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->start();
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
ob_end_clean();
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$output = array();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
$pdo = MySQLPDOTest::factory();
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
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
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
$fp = fopen("php://memory", "r+");
rewind($fp);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
var_dump(A::$x);
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
$a = new Test();
var_dump($a->value);
var_dump(gc_collect_cycles());
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
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
var_dump($obj);
$thirty = M_PI / 6.0;
var_dump(sin($thirty));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
var_dump( range(7.0, 1.0, 6.5) );
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
$obj = new C();
var_dump($obj);
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
$date = new DateTime("2011-05-17T22:14:12");
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
var_dump($date->format("D") == $date2->format("D"));
$conn = pg_connect($conn_str);
$table='test_68638';
var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("a", 1);
rename("phar://a.phar/x", "phar://a.phar/y");
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
$f = function () {};
$t = new Test;
$f->__invoke($t->bar(Test::foo(do_throw())));
var_dump( range(1, 7, fdiv(0, 0)) );
var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->bind_result($id);
printf("printf test 16:%x\n", 170);
var_dump(foo());
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
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
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
ob_start("test");
$obj = new C();
var_dump($obj);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 15 ]);
$list = new SplDoublyLinkedList();
$list->push('o');
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
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
$ok = false;
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
$d = new D();
var_dump($d);
var_dump(strncmp("test ", "e", 10));
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
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$pass = "qwerty";
test($p12, $pass);
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
ob_start("test");
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
test(3);
crash();
for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
var_dump($i);
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
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
$row = pg_fetch_row($res, 0);
var_dump($row);
$zip = new ZipArchive();
$zip->close();
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->next();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
touch("$d1\\test1.txt");
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponseHeaders());
ob_start("test");
$fp = fopen('php://input', 'r+');
fclose($fp);
printf("# %s\n", $name);
$im = imagecreate(800, 800);
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
$timestamp = "2005-11-08T11:22:07+03:00";
$logOnEvent = new LogOnEvent(34567, $timestamp);
$ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
test(3);
$link = mysqli_init();
mysqli_close($link);
test();
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
zerofill(9, $link, 'DOUBLE');
$db = createDB();
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
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
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
$document = new \DOMDocument();
$document->loadHTMLFile($uri);
$canary = new Canary(null);
$iterable = f($canary);
$iterable->current();
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->seek(0);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
var_dump(soundex("Lloyd"));
clearstatcache();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->use_result();
$row = $res->fetch_array();
var_dump($row);
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$obj = new testObject();
var_dump($obj->getTest());
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
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("DROP TABLE temp");
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
var_dump($diff->invert, $diff->s, $diff->f);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
mysqli_close($link);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
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
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
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
$empty = "";
var_dump(openssl_pkcs7_verify($empty, 0));
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
printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
restore_exception_handler();
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
var_dump($isEmpty);
__();
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
test("http://t[est@::1]");
$db = PDOTest::factory();
$db->beginTransaction();
printf("printf test 18:%16b\n", 170);
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
ob_clean();
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
error_reporting(E_ALL);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
printf("printf test 1:%s\n", "simple string");
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
var_dump(range('z', 'a', 100));
ini_set('mysqlnd.fetch_data_copy', false);
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
var_dump($list->offsetExists($x));
var_dump(array_pop($input), $input);
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
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
var_dump(foo());
$text = 'This is an ‘example’ of using DOM splitText';
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
debug_print_backtrace();
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
set_error_handler("customErrorHandler");
global $box;
$box = new Box();
test($box);
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->current();
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
$res = [];
display($res);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
rmdir($d0);
var_dump($_SESSION);
$s = "1234567890a";
$i = "010";
var_dump($s[$i], isset($s[$i]));
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$f = function () {};
$t = new Test;
$f->__invoke($t->bar(Test::foo(do_throw())));
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$eml = __DIR__ . "/signed.eml";
$empty = "";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
$empty_string = <<<EOT
EOT;
$blank_line = <<<EOT

EOT;
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
$res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
for($index =0; $index < count($res_heredoc_strings); $index ++) {
  echo "-- Iteration $count --\n";
  var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
  $count++;
}
var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
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
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
var_dump(strncasecmp("test ", "E", 10));
var_dump(baz());
var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
$text = '<p>hello world &trade;</p>';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
$node->textContent = $text;
var_dump($node->textContent == $text);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->resume();
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
sprintf('%2147483648$s, %2$s %1$s', "a", "b");
var_dump(__METHOD__);
var_dump(-2147483648 % -2);
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
$values = array(10,
                10.3,
                3.9505e3,
                037,
                0x5F,
                "10",
                "3950.5",
                "3.9505e3",
                "039",
                true,
                false,
                );
foreach($values as $value) {
    echo "\n-- Iteration $iterator --\n";
    var_dump(expm1($value));
    $iterator++;
}
var_dump(expm1($value));
foo();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
var_dump( range('A', 'H', 0) );
ob_start("test");
var_dump(debug_backtrace());
$empty = "";
var_dump(openssl_pkcs7_verify($empty, 0));
$thirty = M_PI / 6.0;
var_dump(sin($thirty));
zerofill(11, $link, 'DECIMAL');
ini_set('display_errors',true);
var_dump($br);
set_include_path(__DIR__.'/bug39542:.');
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
$body = $dom->getElementsByTagName("body")[0];
$prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
var_dump($prefixed->lookupNamespaceURI("a"));
$foo = new Foo;
var_dump($foo);
var_dump($row['bit_column_1']);
zerofill(12, $link, 'DEC');
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
ob_start("test");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$stmt->execute();
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
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
$bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
ob_start();
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
test(1);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
display($pdo->query("select * from t2")->fetchAll());
$a = new A();
$a->gen();
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
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
$obj = new string1;
var_dump( rtrim($obj, "tc") );
$references = array();
debug_zval_dump($references);
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
var_dump(ob_get_contents());
$fp = fopen('php://input', 'r+');
fclose($fp);
$dest = __DIR__ . "/bug40228";
$zip = new ZipArchive;
$zip->extractTo($dest);
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$client->getQuote("ibm");
pcntl_wait($status);
$foo = new FooBar();
print_R($foo);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
$magic_file = __DIR__ . '/bug79283.db';
file_put_contents($magic_file, "
0	regex	\\0\\0\\0\\0	Test
");
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
ob_start("test");
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
ob_end_clean();
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$attr = $root->attributes('urn:x');
var_dump(dom_import_simplexml($attr)->textContent);
$file_handle = fopen(__FILE__, "r");
fclose($file_handle);
test("http://php.net\\@aliyun.com/aaa.do");
define("TEST",3);
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
var_dump(test());
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
unlink("$d0\\test0.txt");
var_dump(mhash(133, 1086849124, 133));
$dbh = @pg_connect($conn_str);
var_dump(pg_last_notice($dbh));
var_dump($c);
session_write_close();
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( end($resources) );
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileOut);
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
$db = MySQLPDOTest::factory();
foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}
print_r($row);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump(1);
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
printf("[008] PS and non-PS results differ, dumping data\n");
ob_clean();
var_dump ( rtrim("rtrim test        ", true) );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
printf("printf test 32:%.17g\n", -INF);
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
foreach($values as $value) {
    echo @"\nArg value: $value (type: " . gettype($value) . ")\n";
    try {
        var_dump( get_class($value) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( get_class($value) );
var_dump(soundex("Euler")       == soundex("Ellery"));
foo();
ob_end_clean();
var_dump(strncmp("test ", "e", -1));
var_dump(strncasecmp("test ", "E", 10));
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
$f = function () {};
$f->__invoke(do_throw());
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
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
var_dump(__METHOD__);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
phpinfo(INFO_VARIABLES);
var_dump(pack('x') === "\0");
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
var_dump(test());
print_r($str_instead);
zerofill(10, $link, 'DOUBLE PRECISION');
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
var_dump($x);
var_dump($arg);
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
var_dump(soundex("Lukasiewicz"));
$ch = curl_init();
curl_exec($ch);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump($originalEnvelopeData === $envelopeData);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
extract($GLOBALS, EXTR_REFS);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
printf("# Proxy:\n");
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
$a = new B;
$a->bar();
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = "offset";
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
$foo = new FooBar();
print_R($foo);
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
var_dump(isset($_POST['foo']));
$data = array('first', 'fifth', 'second', 'forth', 'third');
var_dump($data);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
$dir = opendir('foo://bar');
closedir($dir);
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
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
$b = 1;
$foo = new Mock_MethodCallbackByReference_7b180d26();
$a = $b = $c = 0;
$foo->bar($a, $b, $c);
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
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
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
debug_print_backtrace();
ini_set('display_errors',true);
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
spl_autoload_register(function ($name) {
});
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 2);
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
call_user_func('bar','second try');
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
var_dump($body->lookupNamespaceURI(NULL));
$rc = new ReflectionClass(B::class);
var_dump($rc->getStaticProperties());
var_dump(strncasecmp("test ", "E", -1));
printf("# %s\n", $name);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$s = "1234567890a";
var_dump($s["10"], isset($s["10"]));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
$eml = __DIR__ . "/signed.eml";
$empty = "";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
test('<?php echo "1";//22');
var_dump(gc_collect_cycles());
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
var_dump(lookup(513));
var_dump($arg);
$ch = curl_init();
curl_close($ch);
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
session_decode($data);
$res = [];
display($res);
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
printf("printf test 21:%016b\n", 170);
$test1 = new B1;
$test1->test();
$a = $b = $c = 2;
foreach (a(range(1, 3)) as $a) {
    var_dump($a);
}
var_dump($a);
set_include_path(__DIR__.'/bug39542:.');
$a = new A();
foreach ($a->gen() as $n) {
    var_dump($n);
}
var_dump($n);
spl_autoload_register(function ($name) {
});
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
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';
unlink($filename);
$inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmdate($value, $timestamp) );
      var_dump( gmdate($value) );
}
var_dump( gmdate($value) );
var_dump($foo[0]);
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
$fp = fopen (__FILE__, "r");
fclose($fp);
$a = new Test();
var_dump($a->value);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
bzclose($bz);
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
var_dump($foo[0]);
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
$matched->splitText($length);
$gen = gen();
$a = bar($gen);
$a->rewind();
$db = MySQLPDOTest::factory();
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
test('Proxy', $obj);
var_dump(c1::$a3);
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
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump($array);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
test('Proxy', $obj);
test("http://php.net\\@aliyun.com/aaa.do");
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump(json_decode('"\ud834"'));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
$str = <<<EOD
us
ing heredoc string
EOD;
var_dump( rtrim($str, "ing") );
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
var_dump($isEmpty);
date_default_timezone_set("Asia/Calcutta");
set_error_handler('error_handler');
test();
$im = imagecreate(800, 800);
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
zerofill(9, $link, 'DOUBLE');
var_dump(count($cert_data['extracerts']));
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
var_dump( range(1, 7, fdiv(0, 0)) );
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
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
var_dump(count(stat("$d0\\test0.txt")) > 0);
$zip = new ZipArchive();
$zip->close();
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
mt_srand(1234567890);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = "offset";
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
set_error_handler('my_error_handler');
error_reporting(E_ALL ^ E_NOTICE);
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
$mysqli->query($sql);
