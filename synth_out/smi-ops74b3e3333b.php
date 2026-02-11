<?php
class A {
    public $a;
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
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
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
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
function getHash($object): string { return get_class($object); }
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
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
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
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
function bar() {
    boo();
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
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
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
function unserialize($data) {
        session_decode($data);
    }
class B extends A
{
    private $test;
}
class Box {
    public ?Test $value;
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
class di extends DateInterval {
    public $unit = 1;
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
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
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
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
function gen() {
    yield 0;
    yield from gen();
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
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
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
function do_throw() { throw new Exception; }
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
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
$time = '9999-11-33';
$date = new DateTime("2011-05-17T22:14:12");
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
$response = ob_get_contents();
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
$db = createDB();
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
function f_0() {
    return true;
}
function f_1() {
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
function f_2() {
    $response = ob_get_contents();
    return $response;
}
function f_3() {
    $instance = new Foo();
    return $instance->bar;
}
var_dump($x);
var_dump ( rtrim("rtrim test0123456789", "0..9") );
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "teststring: %s\n", $r['teststring'] );
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileIn);
printf("# %s:\n", $name);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTML"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
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
printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
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
var_dump($ffi->bug_gh16013_return_enum());
printf("printf test 7:%010.2f\n", 2.5);
function f_4() {
    return 42;
}
function f_5() {
    $a = 1;
    return [0, $a];
}
function f_6() {
    $t = new stdClass;
    return $t;
}
function f_7() {
    return "Class A object";
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
var_dump((new Exception)->getTrace());
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$array = [0];
$ar = array_values($array);
var_dump($ar);
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
call_user_func("static::ok");
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
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
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
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
function f_8() {
    $response = ob_get_contents();
    return $response;
}
function f_9() {
    return true;
}
function f_10() {
    return $x;
}
function f_11() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_12() {
    return get_class($object);
}
function f_13() {
    return '';
}
function f_14() {
    $x = 1;
    $x += 0;
    ++$x;
    return $x;
}
function f_15() {
    return new stdClass();
}
var_dump(pack('x') === "\0");
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$now = new DateTimeImmutable();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
file_put_contents($filename, $xmlstring);
var_dump( range('A', 'H', 0) );
test();
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
$a = new A();
$a->gen();
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
http_server_kill($pid);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Flags        : %d\n", $field->flags);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
$text = 'This is an ‘example’ of using DOM splitText';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$dom->appendChild($node);
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
var_dump(gzfile(__DIR__."/data/test.txt.gz"));
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Length       : %d\n", $field->length);
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
$list2 = clone $list;
foreach($list2 as $x) var_dump($list2->offsetExists($x));
var_dump($list2->offsetExists($x));
test(2);
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
print_r($tmp);
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
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
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->start();
$obj = new C();
var_dump($obj);
var_dump ( rtrim("rtrim test0123456789", "0..9") );
function f_16() {
    return 0;
}
function f_17() {
    return get_class($object);
}
function f_18() {
    return true;
}
function f_19() {
    return '';
}
var_dump( range(1.0, 7.0, 0.0) );
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
printf("printf test 13:%5d\n", -12);
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
var_dump(substr($hash, -1, 1) !== "\0");
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$old_cwd = getcwd();
chdir($old_cwd);
test('y');
class_alias( 'stdClass', 'bool' );
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$fp = fopen($log_file, 'w+');
fwrite($fp, "test");
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
var_dump($s);
extract(Foo::bar());
$wsdl = __DIR__."/bug35142.wsdl";
$tempnum = 12345;
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump($originalEnvelopeData === $envelopeData);
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
printf("# %s\n", $name);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
test('sensitive');
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$count = 1;
$count++;
var_dump(sprintf("%%%.2f", 1.23456789e10));
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
C::$p++;
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
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
var_dump($data);
t3();
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
rmdir($d0);
printf("printf test 18:%16b\n", 170);
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
printf("printf test 32:%.17g\n", -INF);
$object1 = new foo();
var_dump( $count );
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
fclose($output);
$sibling->common();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
$dom = Dom\HTMLDocument::createEmpty();
ob_start("test");
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
$b = new C;
$array = [];
list(
    '' => $foo,
    $bar
) = $array;
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
$a = "20";
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
$var = 10;
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
function f_20() {
    $c = new C();
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    $pass	= PDO_MYSQL_TEST_PASS;
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    openssl_error_string();
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
    unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
    bar();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
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
    var_dump($namespaceless->lookupNamespaceURI("a"));
    $o = new C;
    $o->foo();
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
    var_dump(debug_backtrace());
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    $dbh = @pg_connect($conn_str);
    var_dump(pg_last_notice($dbh));
    $res = [];
    display($res);
    printf("printf test 19:%16x\n", 170);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    define("TEST",2);
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
    $rf = new ReflectionFunction('collator_get_sort_key');
    var_dump($rf->getNumberOfParameters());
    set_error_handler('test_error_handler');
    setlocale(LC_ALL, "C");
    $now = new DateTimeImmutable();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    var_dump(soundex("Hilbert"));
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    test(1);
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    var_dump(array_pop($input), $input);
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    $im = imagecreate(10,10);
    trycatch_dump(
        fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
    );
    printf("printf test 7:%010.2f\n", 2.5);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $g = $param->strA."\n".$param->strB."\n";
    print_r($g);
    checktimeout($s, 500);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
    test();
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    fclose($input);
    session_start();
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
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
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
    checktimeout($s, 500);
    extract(Foo::bar());
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    $callable($nodes);
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    var_dump(@$obj->dynamic++);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    get_basename_with_cp($d1, 65001);
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
    $bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
        $cdata = $ffi->new('float');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
    $tester = new FPM\Tester($cfg);
    $tester->expectLogTerminatingNotices();
    catch (\PDOException $e) {
      var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    set_exception_handler(null);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 10));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "asXml", fn ($n) => $n->asXml());
    foo();
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->rewind();
    $obj = new testObject();
    $obj->setTest('test');
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    var_dump(gc_collect_cycles());
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
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    print_r($data);
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
    var_dump(foo());
    $db = MySQLPDOTest::factory();
    var_dump($db->query('SELECT * FROM test_33689'));
    var_dump(intlcal_is_weekend(1));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    error_reporting(0);
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    var_dump(substr($hash, -1, 1) !== "\0");
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setPattern('VV');
    var_dump(substr_count("", "a", 0, 0));
    $class = new SomeClass;
    $arr = [$class];
    var_dump(json_encode($arr));
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
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $auz = new DateTime($time, $tz_aus);
    $us = new DateTime($time, $tz_us);
    $diff = $auz->diff($us);
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $obj = new string1;
    var_dump( rtrim($obj, "tc") );
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    session_decode($data);
    var_dump( range(1.0, 7.0, 6.5) );
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
    var_dump ( rtrim("rtrim test        ", true) );
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
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
    $b = new B;
    var_dump($b->test);
    $a = new Test();
    $a->TestFunc();
    error_reporting(E_ALL ^ E_NOTICE);
    ob_start(function() {
        declare(ticks=1);
        register_tick_function(
           function() { }
        );
    });
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_USERNAME, null);
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    printf("Content-Type OK" . PHP_EOL);
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    ini_set("intl.error_level", E_WARNING);
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $test = array("A\x00B" => "Hello world");
    debug_zval_dump($test);
    var_dump(strncasecmp("test ", "E", 0));
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $needles = array(
      "!@@!",
      '_',
      '("_")',
      "$*",
      "(special)",
      $heredoc_needle,  //needle as heredoc string
      $special_chars_str  //needle as haystack
    );
    foreach($needles as $needle) {
      var_dump( strrchr($special_chars_str, $needle) );
    }
    var_dump( strrchr($special_chars_str, $needle) );
    define("FOO", "okey");
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(NULL));
    php_cli_server_start('foo bar');
    var_dump(soundex("Lloyd"));
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    test('<?php echo "1";//2');
    phpinfo(INFO_VARIABLES);
    printf("printf test 31:%.17g\n", INF);
    $browser=get_browser(NULL, true);
    print_r($browser);
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
    $tester->terminate();
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    var_dump($shm_id2);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $fp = php_cli_server_connect();
    fclose($fp);
    foo(false, false);
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
    foreach($arrays as $array) {
      echo "-- Iteration $iterator --\n";
      // with default argument
      echo "- with default argument -\n";
      var_dump( array_reverse($array) );
      // with all possible arguments
      echo "- with \$preserve keys = true -\n";
      var_dump( array_reverse($array, true) );
      echo "- with \$preserve_keys = false -\n";
      var_dump( array_reverse($array, false) );
      $iterator++;
    }
    var_dump( array_reverse($array, true) );
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    $client->Add();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t2 as select 678 n, 'ok' status");
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    $f_base = "67647私はガラスを食べられます.mov";
    $f = __DIR__ . DIRECTORY_SEPARATOR . $f_base;
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    $ffi->bug79177();
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    printf("printf test 7:%010.2f\n", 2.5);
    ob_end_clean();
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    ob_end_clean();
    $res->free();
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Decimals     : %d\n", $field->decimals);
    $obj = new C();
    var_dump($obj);
    global $box;
    $box = new Box();
    test($box);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    rmdir($d1);
    $link->close();
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    get_basename_with_cp($d0, 65001);
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
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    $fp = tmpfile();
    fwrite($fp, "I am the LOB data");
    $text = 'This is an ‘example’ of using DOM splitText';
    $start = 30;
    $length = 3;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->createTextNode($text);
    $matched = $node->splitText($start);
    $matched->splitText($length);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['buffer_size']);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    var_dump($shm_id2);
    $db = createDB();
    testLastInsertId($db);
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    php_cli_server_start(<<<'SCRIPT'
        ini_set('display_errors', 0);
        switch($_SERVER["REQUEST_URI"]) {
                case "/parse":
                        try {
                            eval("this is a parse error");
                        } catch (ParseError $e) {
                        }
                        echo "OK\n";
                        break;
                case "/fatal":
                        eval("foo();");
                        echo "OK\n";
                        break;
                case "/compile":
                        eval("class foo { final private final function bar() {} }");
                        echo "OK\n";
                        break;
                case "/fatal2":
                        foo();
                        echo "OK\n";
                        break;
                default:
                        return false;
        }
    SCRIPT
    );
    var_dump(substr_compare('/', '/asd', 0, 4));
    var_dump ( rtrim("rtrim test        ", " ") );
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    $filename = __DIR__ . '/bug77432.phar';
    $interval = new DateInterval('P1D');
    $iterator = 1;
    $ar1 = array("row1" => 2, "row2" => 1);
    $I = new di('P10D');
    $I->unit = 42;
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    spl_autoload_register($callback2);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t (n int, t text)");
    test(1);
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
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    test("str");
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    $s = "1234567890a";
    var_dump($s["010"], isset($s["010"]));
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    mt_srand(1234567890);
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
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    var_dump(strncmp("test ", "e", 0));
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    register_shutdown_function('ABC');
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    var_dump ( $vars );
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    var_dump( range('A', 'H', 0.0) );
    $i= DateInterval::createFromDateString('2 days');
    var_dump($i);
    $array = [0];
    $ar = array_values($array);
    var_dump($ar);
    var_dump((new Exception)->getTrace());
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $g = $param->strA."\n".$param->strB."\n";
    print_r($g);
    $obj = new testObject();
    $obj2 = unserialize(serialize($obj));
    var_dump($obj2->getTest());
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $offset3 = PHP_INT_MAX * 16;
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    t1();
    set_error_handler(function($no, $msg) {
        throw new Exception($msg);
    });
    set_error_handler('my_error_handler');
    $batch_file_content = <<<EOT
    @echo off
    powershell -Command "Write-Output '%0%'"
    powershell -Command "Write-Output '%1%'"
    EOT;
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    file_put_contents($batch_file_path, $batch_file_content);
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    var_dump($im);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
    set_error_handler(function($no, $msg) {
        throw new Exception($msg);
    });
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("b", 2);
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    phpinfo(INFO_MODULES);
    debug_print_backtrace();
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    ob_start();
    $obj = new C();
    var_dump($obj->a);
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
    $tester->expectLogStartNotices();
    ob_end_flush();
    var_dump($line);
    printf("printf test 14:%c\n", 64);
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1M'));
    $counter = 0;
    ob_start(function ($buffer) use (&$c, &$counter) {
            $c = 0;
            ++$counter;
    }, 1);
    var_dump(strncasecmp("test ", "E", 0));
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
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
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $zip = new ZipArchive();
    $zip->open($filename);
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
    imagesetthickness($im, $thickness);
    printf("Content-Type Default OK" . PHP_EOL);
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    var_dump($prop->getRawValue($a));
    $a[10] = "42";
    var_dump($a["10"], isset($a["10"]));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
    openssl_error_string();
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    while (true) {
        break;  // avoid infinite loop
        $loop_counter = 1;
        $loop_counter++;
    }
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $GLOBALS['b'] = 2;
    $org_a = $GLOBALS['a'];
    foreach ($offsets as $dimension) {
        $container = false;
        $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
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
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $failures[] = $error;
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
    var_dump($ffi->bug_gh16013_return_bool());
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($dom->saveHTML($node));
    $child = new ChildClass();
    $child->testIsCallable2();
    $list = [];
    asort($list);
    var_dump(json_decode('[]', false, 0x100000000));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
    $obj = new C();
    var_dump($obj->a);
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
    $fp = php_cli_server_connect();
    fclose($fp);
    session_start();
    test();
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    (new B)->baz();
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $client->getQuote("ibm");
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
    $dbh = @pg_connect($conn_str);
    var_dump(pg_last_notice($dbh));
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    file_put_contents($tmpFileIn, $originalEnvelopeData);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $cl = new bug8318;
    $cl->fpassthru();
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
    printf("printf test 19:%16x\n", 170);
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
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 6);
    var_dump(soundex("Lloyd")       == soundex("Ladd"));
    checktimeout($s, 500);
    $gen = gen();
    $a = bar($gen);
    $a->rewind();
    var_dump(new FooBar);
    zerofill(4, $link, 'MEDIUMINT');
    set_exception_handler(function () { print "EX\n"; });
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
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
    validate((object) []);
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
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
    byRef(C[0]);
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);
    var_dump(c1::$a2);
    var_dump(__METHOD__);
    foo();
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    $link = mysqli_init();
    $link->set_charset('sjis');
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
    $db = MySQLPDOTest::factory();
    foreach ($db->query('SELECT * FROM test_33689') as $row) {
        print_r($row);
    }
    print_r($row);
    var_dump(debug_backtrace());
    byVal(C[0]);
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($filename, $xmlstring);
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    mkdir($d1);
    $output = array();
    var_dump($output);
    var_dump($_SESSION);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    get_basename_with_cp($d1, 65001);
    t1();
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 4);
    $a = new Test();
    var_dump($a->value);
    $tester = new FPM\Tester($cfg);
    $tester->start();
    var_dump(lookup(510));
    var_dump(test());
    $im = imagecreate(800, 800);
    imagecolorallocate($im, 255, 255, 255);
    session_start();
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    for($i = 495; $i <= 1074; $i++) {
      ini_set('precision', $i);
      echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
    }
    ini_set('precision', $i);
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_PASSWORD, null);
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
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    test('Ghost', $obj);
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
    var_dump($body->lookupNamespaceURI("a"));
    var_dump(strlen(file_get_contents('php://input')));
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump($data);
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    $reflector = new ReflectionClass(C::class);
    $reflector->initializeLazyObject($obj);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    reset( $array_test );
    $loop_counter = 1;
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $fiber = new Fiber(function() use ($gen) {
        $gen->current();
    });
    $fiber->start();
    $insert = null;
    var_dump(soundex("Euler")       == soundex("Ellery"));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
test('Ghost', $obj);
function f_21() {
    function f_22() {
        $a = new A();
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
        var_dump($prop->getRawValue($a));
        $fp = fopen("php://memory", "r+");
        fwrite($fp, str_repeat("baad", 1024*1024));
        if (true) {
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
        }
        if (!true) {
            var_dump(scandir(''));
        }
    }
    for ($i_23 = 0; $i_23 < 10; $i_23++) {
        $db = getDbConnection();
        var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
        $a = new A();
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
        $prop->setRawValue($a, 1);
    }
    for ($i_24 = 0; $i_24 < 10; $i_24++) {
        putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
        ob_end_flush();
    }
    for ($i_25 = 0; $i_25 < 10; $i_25++) {
        $row_stmt = null;
        var_dump($row_stmt);
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $r2 = $r['testtable'];
        printf( "testtable: %d\n", $r2['major'] );
    }
}
var_dump(defined('SO_REUSEPORT'));
function f_26() {
    $response = ob_get_contents();
    return $response;
}
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
function f_27() {
    $containers = array();
    return "Class A object";
}
register_shutdown_function('timE');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
function f_28() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
printf("# Ghost:\n");
$date = new DateTime("2011-05-17T22:14:12");
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
var_dump($date->format("D") == $date2->format("D"));
var_dump($i=1);
var_dump(error_get_last());
function f_29() {
    $i = 1;
    return $i;
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';
unlink($filename);
