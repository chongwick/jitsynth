<?php
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function g() {
    yield 'foo';
    Fiber::suspend();
}
class P {
    protected function common() {
        throw new Exception('Unreachable');
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
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
function attach($db, $callback) { $db->setNoticeCallback($callback); }
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
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
var_dump(intlcal_is_weekend(1));
$sh = new SessionHandler;
$sh->open('path', 'name');
chdir(__DIR__);
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
(new B)->baz();
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
var_dump(odbc_result($res, 'whatever'));
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
$canary = new Canary(null);
$iterable = f($canary);
$fiber = new Fiber(function () use ($iterable, $canary) {
    var_dump($canary, $iterable->current());
    $f = $iterable->next(...);
    $f();
    var_dump("not executed");
});
$fiber->start();
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
set_time_limit(5);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$stmt->execute();
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
ob_start();
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
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$obj = new C();
var_dump($obj->a);
printf("printf test 15:%b\n", 170);
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
var_dump(soundex("Euler"));
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
$matched->splitText($length);
var_dump(soundex("Euler")       == soundex("Ellery"));
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
$compressed = file_get_contents(__DIR__ . "/75776.$ext");
var_dump($function($compressed));
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
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
mkdir($targetDir, 0777, true);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
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
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
restore_exception_handler();
var_dump(yield from g());
printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
printf("printf test 4:%.10f\n", 10.0/3);
$file_handle = fopen(__FILE__, "r");
fclose( $file_handle );
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->loadHTML($html);
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
fclose($f);
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Author'][0] === '?');
$array_object = array();
var_dump( end($array_object) );
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
var_dump( range(7.0, 1.0, 6.5) );
var_dump(gzfile(__DIR__."/data/test.txt.gz"));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
printf("printf test 3:%f\n", 10.0/3);
$a = new A();
$a->test(new B());
var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
var_dump(lookup(510));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
test('sensitive');
var_dump($foo[0]);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'aaaa');
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$db->setNoticeCallback($callback);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
var_dump(strncmp("test ", "e", 10));
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testbin: %s\n", bin2hex($r['testbin']) );
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->real_query($sql);
$dyadic = 0.00000000000045474735088646411895751953125;
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
extract(Foo::bar());
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
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
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
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 0, 0);
test();
print_r($str_instead);
var_dump(session_cache_limiter());
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
$q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
$b = new C;
$b->bar();
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
$im = imagecreate(800, 800);
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
var_dump(soundex("Lukasiewicz"));
$ch = curl_init();
curl_close($ch);
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$textascii = 'This is an "example" of using DOM splitText';
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
clearstatcache();
$o = new C;
$o->foo();
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
$create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
var_dump($create);
$fp = php_cli_server_connect();
fclose($fp);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
