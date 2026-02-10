<?php
function f_0() {
    $magic_file = __DIR__ . '/bug79283.db';
    function f_1() {
    }
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1M'));
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    $mutable = \DateTime::createFromImmutable($immutable);
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
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
}
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$this->mysqli->close();
function f_2() {
    $unset_var = 10;
    function f_3() {
    }
    $zip = new ZipArchive();
    $zip->close();
    $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
}
var_dump("done");
function f_4() {
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
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
function f_5() {
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
function f_6() {
    function f_7() {
    }
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:html"));
}
var_dump(spl_autoload_functions());
function f_8() {
    $argv = array(1, 2, 3);
    function f_9() {
    }
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
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
var_dump(lookup(510));
function f_10() {
    $c = "assert";
    function f_11() {
    }
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
}
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
function f_12() {
    $cert = "file://" . __DIR__ . "/cert.crt";
    $rcrt = openssl_x509_read($cert);
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
    zerofill(2, $link, 'TINYINT');
}
set_exception_handler("foo");
function f_13() {
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
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $GLOBALS['b'] = 2;
    $a = NULL;
    $b = NULL;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
function f_14() {
    function f_15() {
    }
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
}
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
file_put_contents($filename, $xmlstring);
function f_16() {
    $dir = opendir('foo://bar');
    function f_17() {
    }
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    var_dump($obj);
}
extract($GLOBALS, EXTR_REFS);
var_dump ( rtrim("rtrim test   \t\0 ") );
function f_18() {
    $res = [];
    function f_19() {
    }
    set_error_handler('error_handler');
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    date_default_timezone_set('UTC');
}
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->loadHTML($html);
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
function f_20() {
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $browser=get_browser(NULL, true);
    print_r($browser);
}
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
function f_21() {
    $dfp = opendir ( __DIR__ );
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
}
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
function f_22() {
    function f_23() {
    }
    class A {
        private static $x = 1;
    }
    class B extends A {
        function bar() {
            var_dump(self::$x);
        }
    }
    $a = new B;
    $a->bar();
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
