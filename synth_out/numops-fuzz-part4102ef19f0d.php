<?php
function f_0() {
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    function byVal($arg) {
        var_dump($arg);
    }
    var_dump($arg);
    $stmt->close();
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
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    display($pdo->query("select * from t2")->fetchAll());
    var_dump(strncasecmp("test ", "E", -1));
    function __(){
      $GLOBALS['a'] = "bug\n";
      array_splice($GLOBALS,0,count($GLOBALS));
      /* All global variables including $GLOBALS are removed */
      echo $GLOBALS['a'];
    }
    __();
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    var_dump($obj);
    $s = 'C:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
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
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test@[::1]");
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "var_dump", fn ($n) => var_dump($n));
    function &test() {
        try {
            return $a;
        } finally {
            $a = 2;
        }
    }
    var_dump(test());
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
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    est0.txt");
    unlink("$d1\\;
    $res->free();
    $str = <<<EOD
    us
    ing heredoc string
    EOD;
    var_dump( rtrim($str, "ing") );
    var_dump(isset($_POST['foo']));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
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
    $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    var_dump(`$php -n -v`);
    $dom = new DOMDocument;
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test');
    function a() {
        $a = $b = $c = 2;
        foreach(range(1, 5) as $v) {
            yield $v;
        }
        return;
    }
    $a = $b = $c = 2;
    foreach (a(range(1, 3)) as $a) {
        var_dump($a);
    }
    var_dump($a);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
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
    function foo() {
        $x = 1;
        $x += 0;
        ++$x; // mem -> reg
        return $x;
    }
    var_dump(foo());
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    printf("# Ghost:\n");
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    catch (PDOException $e) {
                printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
            }
    printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
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
    var_dump(strncmp("test ", "e", -1));
    function test($case) {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $fn = "bug71263.bz2";
        $compressed = (string) bzcompress($plain);
        echo "Compressed len = ", strlen($compressed), "\n";
    
        if ($case == 1) {
            // Set a random byte in the middle of the compressed data
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays empty string then garbage, no errors detected:
            $compressed[strlen($compressed) - 15] = 'X';
        } else if ($case == 2) {
            // Truncate the compressed data
            // --> php_bz2_decompress_filter() does not detect errors,
            // --> fread() displays the empty string:
            $compressed = substr($compressed, 0, strlen($compressed) - 20);
        } else {
            // Corrupted final CRC
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays an empty string, then the correct plain text, no error detected:
            $compressed[strlen($compressed)-2] = 'X';
        }
    
        file_put_contents($fn, $compressed);
    
        $r = fopen($fn, "r");
        stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
        while (!feof($r)) {
            $s = fread($r, 100);
            echo "read: "; var_dump($s);
        }
        fclose($r);
        unlink($fn);
    }
    test(1);
    var_dump(json_decode('[]', false, 0x100000000));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    fclose($input);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    session_write_close();
    var_dump(pcntl_wexitstatus($status));
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    var_dump(strncmp("test ", "e", -1));
    var_dump($br);
    var_dump(mhash(133, 1086849124, 133));
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@[::1]");
    $before = memory_get_usage();
    $after = memory_get_usage();
    var_dump($before === $after);
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $bar = (int)$foo;
    var_dump($bar);
    $list = new SplDoublyLinkedList;
    var_dump($list->serialize());
    restore_exception_handler();
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
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
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
    var_dump(lookup(513));
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    set_error_handler(function($_, $m) { throw new Exception($m); });
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    function foo1($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    class TestSoapClient extends SoapClient
    {
        public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
        {
            return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
        }
    }
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    print_r($client->GetExpressCheckoutDetails());
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['used_memory'] + $info['free_memory']);
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
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
    var_dump(unserialize(serialize($obj)));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("html"));
    var_dump(range('a', 'z', 100));
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    var_dump(http_get_last_response_headers());
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI("a"));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    function f($canary) {
        var_dump(yield from g());
    }
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    $fiber->start();
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
    php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
    $eml = __DIR__ . "/signed.eml";
    var_dump(openssl_pkcs7_verify($eml, 0));
    phpinfo(INFO_VARIABLES);
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
    proc_close($proc);
    spl_autoload_register(function($class) {
        echo "$class\n";
        if ($class == 'X') {
            new Y;
        }
        if ($class == 'Y') {
            new Q;
        }
    });
    var_dump(session_save_path());
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
    var_dump( range(1, 7, 10.0**400) );
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 400));
    var_dump(new Foo);
    ini_set("session.save_handler","files");
    class_alias( 'stdClass', 'bool' );
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
    class_alias( 'stdClass', 'bool' );
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $fiber = new Fiber(function() use ($gen) {
        $gen->current();
    });
    $fiber->start();
    pcntl_wait($status);
    $code = null;
    $err = null;
    var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
    spl_autoload_register(function($class) {
        echo "$class\n";
        if ($class == 'X') {
            new Y;
        }
        if ($class == 'Y') {
            new Q;
        }
    });
    ini_set("intl.error_level", E_WARNING);
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    }
    var_dump($arg);
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
    $browser=get_browser(NULL, true);
    print_r($browser);
    var_dump(strncmp("test ", "e", 0));
    var_dump($row);
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    class A {
        public function __call($name, $args) {
            eval('$args = array(); var_dump(debug_backtrace());');
        }
    }
    $a = new A();
    $a->test("test");
    class A {
        public function __call($name, $args) {
            for ($i = 0; $i < 5; $i++) {
                yield $i;
            }
        }
    }
    $a = new A();
    $a->gen();
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    php_cli_server_start($code, null, $args);
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
    $match->invoked($invocation);
    $empty_webp = __DIR__ . "/gh13774.webp";
    file_put_contents($empty_webp, "");
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    print_r($stmt->getColumnMeta(0));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    var_dump(sprintf("%%", 1.23456789e10));
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    $zip = new ZipArchive();
    $zip->addFromString('foo.txt', 'foo bar foobar');
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) ['b' => 0]);
    bar();
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    $empty_webp = __DIR__ . "/gh13774.webp";
    file_put_contents($empty_webp, "");
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    var_dump(session_save_path());
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
    printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    var_dump ( rtrim("rtrim test        ", true) );
    $list = new SplDoublyLinkedList;
    var_dump($list->serialize());
    printf("Content-Type Default OK" . PHP_EOL);
    function t2()
    {
        ob_start("test");
        echo "Hello from t2 1 ";
            ob_flush();
            echo "Hello from t2 2 ";
            ob_end_flush();
    }
    t2();
    $row_stmt = null;
    var_dump($row_stmt);
    gc_collect_cycles();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    ini_set('session.serialize_handler', 'php_serialize');
    var_dump(get_class_vars(C::class));
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzpassthru($h);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    var_dump($value);
    $client2 = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("")
        ],
      ]),
    ]);
    $headers = $client2->__getLastRequestHeaders();
    printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
    register_shutdown_function(function () {
        echo "register_shutdown_function()\n";
        throw new \Exception('shutdown');
    });
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    final class A
    {
        public string $a;
    
        public static function fromArray(array $props): self
        {
            $me = new static;
            foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
            return $me;
        }
    
        public function __get($name)
        {
            throw new \LogicException("Property '$name' is not defined.");
        }
    }
    var_dump(A::fromArray(['a' => 'foo']));
    set_exception_handler(function() {
        echo 'Second handler' . PHP_EOL;
    });
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
    $tester
        ->request('', ['SCRIPT_FILENAME' => null])
        ->expectHeader('Status', '404 Not Found')
        ->expectError('Primary script unknown');
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
    $browser=get_browser(NULL, true);
    print_r($browser);
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    ;
    
    mkdir($d0);
    ;
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
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
    http_server_kill($pid);
    var_dump(A::$x);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ->appendChild($node);
    
    pr;
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    $c = $b;
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    var_dump(__METHOD__);
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%030.-15s", $tempstring));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "asXml", fn ($n) => $n->asXml());
    openssl_error_string();
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    });
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    fclose($f);
    $fp = tmpfile();
    rewind($fp);
    var_dump(preg_replace_callback_array([], ''));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $date2 = new DateTime("Fri 19 November 2011");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, true);
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    fclose($f);
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
    $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
    $strA = 'test &amp; test';
    $strB = 'test & test';
    $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
    print_r($res);
    function foo(): never {
        if (false) {
            throw new Exception('bad');
        }
    }
    foo();
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    php_cli_server_start($code, null, $args);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $bar = new DateTime();
    $args = [1, &$bar];
    $function = function (int &$foo, DateTimeInterface &$bar) {};
    (new ReflectionFunction($function))->invokeArgs($args);
    pcntl_sigwaitinfo($a,$a);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(false, true);
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
    printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://php.net\\@aliyun.com/aaa.do");
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj->a);
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
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
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
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $client2 = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("")
        ],
      ]),
    ]);
    $headers = $client2->__getLastRequestHeaders();
    printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
    $dir = opendir('foo://bar');
    closedir($dir);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    printf("printf test 2:%d\n", 42);
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
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $stmt->execute();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
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
    mysqli_query($link, 'ALTER TABLE test DROP zero');
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $depth0 = "depth02";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump(range(1, 3, -1));
    $im = imagecreate(800, 800);
    imagecolorallocate($im, 255, 255, 255);
    var_dump(soundex("Gauss"));
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    $anon->field = 123;
    var_dump($anon->field);
    ini_set("soap.wsdl_cache_enabled",0);
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
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $rc = new ReflectionClass('Foo');
    var_dump($rc->getStaticProperties());
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    printf("printf test 31:%.17g\n", INF);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "attributes", fn ($n) => $n->attributes());
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    printf("# %s:\n", $name);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
    restore_exception_handler();
    $row_stmt = null;
    var_dump($row_stmt);
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    ;
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
    byRef(C[0]);
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    };
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_binmode($res, ODBC_BINMODE_RETURN);
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
    boo();
    function boo(){
        debug_print_backtrace();
    };
    function g() {
        yield 'foo';
        Fiber::suspend();
    }
    var_dump(yield from g());
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    var_dump($anon->field);
    gc_collect_cycles();
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    $ar1 = array(1, 2);
    $unset_var = 10;
    class classWithToString
    {
        public function __toString() {
            return "Class A object";
        }
    }
    class classWithoutToString
    {
    }
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
    printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    $tester = new FPM\Tester($cfg);
    $tester->expectLogTerminatingNotices();
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
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
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
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    grapheme_stripos(1,1,2147483648);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    mt_srand(1234567890);
    var_dump(json_last_error_msg());
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "HTML", "1"));
    printf("printf test 11: 123456789012345678901234567890\n");
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
    var_dump($sends1);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzpassthru($h);
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    printf("printf test 26:%2\$d %1\$d\n", 1, 2);
    printf("printf test 25:%-2s\n", "gazonk");
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ->appendChild($node);
    
    pr;
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
    set_time_limit(5);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
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
    var_dump(tidy_get_body($t));
    $dbh = @pg_connect($conn_str);
    var_dump(pg_last_notice($dbh));
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $date2 = new DateTime("Fri 19 November 2011");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
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
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
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
    function byVal($arg) {
        var_dump($arg);
    }
    var_dump($arg);
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    ini_set("intl.error_level", E_WARNING);
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    var_dump(__METHOD__);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testtable'];
    printf( "testtable: %d\n", $r2['major'] );
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    php_cli_server_start($code, null, $args);
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
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
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
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    foreach($result as $val) {
        $val->dump();
    }
    $val->dump();
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    $im = imagecreate(800, 800);
    imagecolorallocate($im, 255, 255, 255);
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    $references = array();
    debug_zval_dump($references);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    printf("printf test 17:%X\n", 170);
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
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
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    unlink($trace_file);
    catch (\PDOException $e) {
      var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    clearstatcache();
    $a = new PDO("sqlite::memory:");
    $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 5));
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
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
    ini_set('display_errors',true);
    var_dump(soundex("Knuth")       == soundex("Kant"));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
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
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
    var_dump( strtok("\0") );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
    $im = ImageCreateTrueColor(10, 10);
    imagesavealpha($im, true);
    spl_autoload_register(function($class) {
        echo "$class\n";
        if ($class == 'X') {
            new Y;
        }
        if ($class == 'Y') {
            new Q;
        }
    });
    $offsets = array(20, 21, 22, 53, 54);
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    $tester = new FPM\Tester($cfg);
    $tester->close();
    spl_autoload_register(function ($name) {
        if ($name == "B") {
            eval ("abstract class B extends A { }");
        } else if ($name == "A") {
            eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
        } else if ($name == "T") {
            eval ("trait T { public function __construct() { } }");
        }
        return TRUE;
    });
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
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
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    var_dump($res);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
    printf("[009] Cannot run SELECT, [%d] %s\n",
                    mysqli_errno($link), mysqli_error($link));
    $dom = new DOMDocument;
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    define("TEST",2);
    var_dump(__METHOD__);
    var_dump(-2147483648 % -1);
    var_dump(getenv("HTTP_X_FORWARDED_FOR"));
    $im = imagecreate(800, 800);
    imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    printf( "testarray: %s\n", $r2[2] );
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    
    $xmlstring = '<?xml ve
    ;
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, false);
    printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
                $host, $user, $db, $port, $socket);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    (stat("$d0\\test0.txt")) > 0);
    var_dump(coun;
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
    class Test {
        public function __debugInfo() {
            return [$this];
        }
    }
    var_dump(new Test);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    (stat("$d0\\test0.txt")) > 0);
    
    unlink("$d0\;
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
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
    $tester->close();
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->execute();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 15 ]);
    error_reporting(E_ALL);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $b->execute(array (5));
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $fiber = new Fiber(function() use ($gen) {
        $gen->current();
    });
    $fiber->start();
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    var_dump($prop->getRawValue($a));
    var_dump(json_decode('{"":"value"}', true));
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    ini_set('mysqlnd.fetch_data_copy', false);
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
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
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($dom->saveHTML($node));
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    var_dump($obj);
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    var_dump($data);
    $i= DateInterval::createFromDateString('2 days');
    var_dump($i);
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
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
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    $t = new base();
    $t->test();
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    $zip = new ZipArchive();
    $zip->close();
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileIn);
    var_dump ( rtrim("rtrim test   \t\0 ") );
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $arr = [$class];
    var_dump(json_encode($arr));
    set_time_limit(5);
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
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    var_dump(self::$x);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->execute();
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
    $host = curl_cli_server_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
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
    proc_close($proc);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $html = simplexml_import_dom($tag);
    var_dump($html);
    var_dump(range('z', 'a', 100));
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
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
    $wsdl = __DIR__."/bug35142.wsdl";
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $this->server = new SoapServer($wsdl, $options);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
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
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
    var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
    function test(array... $args) {
        var_dump($args);
    }
    var_dump($args);
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
    class C {
        public int $a;
    }
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
    zerofill(3, $link, 'SMALLINT');
    catch (\Error $e) {
        var_dump($e);
    }
    var_dump($e);
    var_dump(substr_count("", "a", 0, 0));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php');
    rename("phar://a.phar/x", "phar://a.phar/y");
    var_dump(class_exists("TestClass", true));
    printf("printf test 19:%16x\n", 170);
    call_user_func('bar','second try');
    mysqli_free_result($res);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->rewind();
    var_dump(json_last_error() === JSON_ERROR_UTF16);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->after('bar', $doc->documentElement->firstChild, 'baz');
    var_dump(isset($_POST['foo']));
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
    zerofill(7, $link, 'BIGINT');
    function t2()
    {
        ob_start("test");
        echo "Hello from t2 1 ";
            ob_flush();
            echo "Hello from t2 2 ";
            ob_end_flush();
    }
    t2();
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
    printf("printf test 19:%16x\n", 170);
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(NULL));
    var_dump(__METHOD__);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
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
    var_dump($namespaceless->lookupNamespaceURI(""));
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    var_dump(spl_autoload_unregister($callback1));
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
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
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
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    var_dump($obj);
    lor(10,100);
    imagefill($im1, 0,0, 0x
    fffff);
    imagegd2($im1, $file);
    ;
    var_dump ( $vars );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    test('Ghost', $obj);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $filename = __DIR__ . '/bug77432.phar';
    unlink($filename);
    print_r($str_instead);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    var_dump($obj);
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
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
    foreach( $strings_with_nulls as $string )  {
      echo "\n--- Iteration $counter ---\n";
      var_dump( strtok($string, "\0") );
      for($count = 1; $count <= 5; $count++)  {
        var_dump( strtok("\0") );
      }
      $counter++;
    }
    var_dump( strtok($string, "\0") );
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
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $server = new soapserver(null,array('uri'=>"http://testuri.org"));
    $server->addfunction("test");
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    function f($canary) {
        var_dump(yield from g());
    }
    $canary = new Canary(null);
    $iterable = f($canary);
    $iterable->current();
    chdir(__DIR__);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Flags        : %d\n", $field->flags);
    var_dump(pcntl_wexitstatus($status));
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $date]);
    printf("printf test 11: 123456789012345678901234567890\n");
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
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    var_dump(odbc_result($res, 'whatever'));
    undefined_function('Null');
    var_dump(isset($_POST['foo']));
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $db = MySQLPDOTest::factory();
    foreach ($db->query('SELECT * FROM test_33689') as $row) {
        print_r($row);
    }
    print_r($row);
    $arg = new Stdclass();
    print_r($arg);
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
    http_server_kill($pid);
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
    class MethodCallbackByReference {
        public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
        public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    }
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
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
    public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $a = $b = $c = 0;
    $foo->bar($a, $b, $c);
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    class derived extends base {
        function show() {
            echo "derived\n";
        }
        function test() {
            echo "test\n";
            $this->show();
            parent::test();
            parent::show();
        }
    }
    $t = new derived();
    $t->test();
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
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
    zerofill(8, $link, 'FLOAT');
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
    set_exception_handler(function() {
        echo 'Second handler' . PHP_EOL;
    });
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfParameters());
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "length: %d\n", count($r) );
    printf("Content-Type OK" . PHP_EOL);
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
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
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
    var_dump(unserialize(serialize($obj)));
    class testObject extends ArrayObject {
        protected $test;
    
        public function getTest() {
            return $this->test;
        }
    
        public function setTest($test) {
            $this->test = $test;
        }
    }
    $obj = new testObject();
    var_dump($obj->getTest());
    mt_srand(1234567890);
    var_dump(range('a', 'z', 100));
    $link = mysqli_init();
    $japanese_so = pack('H4', '835c');
    var_dump($link->real_escape_string($japanese_so) === $japanese_so);
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
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
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "length: %d\n", count($r) );
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) []);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {});
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    var_dump($finfo->buffer("buffer\n"));
    ob_end_clean();
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
    zerofill(5, $link, 'INT');
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    http_server_kill($pid);
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, false);
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    var_dump($foo);
    var_dump(1);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
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
    zerofill(10, $link, 'DOUBLE PRECISION');
    class A1 {
    	public function __call($method, $args) { echo "__call\n"; }
    	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
    }
    class B1 extends A1 {
    	public function test(){	parent::test();	}
    }
    $test1 = new B1;
    $test1->test();
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    test('Ghost', $obj);
    $im = imagecreate(800, 800);
    imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
    printf("# Proxy:\n");
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    printf("printf test 1:%s\n", "simple string");
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
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    $wsdl = __DIR__."/bug35142.wsdl";
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $this->server = new SoapServer($wsdl, $options);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 10));
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    file_put_contents($tmpFileIn, $originalEnvelopeData);
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    undefined_function('Null');
    printf("printf test 20:%16X\n", 170);
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
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
    checktimeout($s, 500);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
    set_error_handler(function($no, $msg) {
        throw new Exception($msg);
    });
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 400));
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
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    class TestObject {}
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
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
    $server = new soapserver(null,array('uri'=>"http://testuri.org"));
    $server->addfunction("test");
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    var_dump($obj);
    $datatypes = array(
            MYSQLI_TYPE_TINY => "TINY",
            MYSQLI_TYPE_SHORT => "SHORT",
            MYSQLI_TYPE_LONG => "LONG",
            MYSQLI_TYPE_FLOAT => "FLOAT",
            MYSQLI_TYPE_DOUBLE => "DOUBLE",
            MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
            MYSQLI_TYPE_LONGLONG => "LONGLONG",
            MYSQLI_TYPE_INT24 => "INT24",
            MYSQLI_TYPE_DATE => "DATE",
            MYSQLI_TYPE_TIME => "TIME",
            MYSQLI_TYPE_DATETIME => "DATETIME",
            MYSQLI_TYPE_YEAR => "YEAR",
            MYSQLI_TYPE_ENUM => "ENUM",
            MYSQLI_TYPE_SET	=> "SET",
            MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
            MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
            MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
            MYSQLI_TYPE_BLOB => "BLOB",
            MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
            MYSQLI_TYPE_STRING => "STRING",
            MYSQLI_TYPE_NULL => "NULL",
            MYSQLI_TYPE_NEWDATE => "NEWDATE",
            MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
        );
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
    function does_not_work()
    {
        global $data; // Remove this line to make array_multisort() work
    
        $data = array('first', 'fifth', 'second', 'forth', 'third');
        $sort = array(1, 5, 2, 4, 3);
        array_multisort($sort, $data);
    
        var_dump($data);
    }
    does_not_work();
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    mdir($prefi;
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
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    ob_start();
    var_dump(json_decode('[]', false, 0x100000000));
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
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
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    function test($x) {
        switch ($x->y) {
            default:
                throw new Exception;
            case 'foobar':
                return new stdClass();
                break;
        }
    }
    $x = (object)['y' => 'foobar'];
    var_dump(test($x));
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
    $tester->close();
    var_dump(scandir(''));
    bar();
    $zip = new ZipArchive();
    $zip->extractTo(__DIR__);
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    class testObject extends ArrayObject {
        protected $test;
    
        public function getTest() {
            return $this->test;
        }
    
        public function setTest($test) {
            $this->test = $test;
        }
    }
    $obj = new testObject();
    $obj2 = unserialize(serialize($obj));
    var_dump($obj2->getTest());
    $a = array(1,2,3);
    $s1 = "some string";
    var_dump($a + $s1);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
    printf("printf test 6:%-010.2f\n", 2.5);
    $dom = new DOMDocument;
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 8));
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], [2]);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test/empty');
    $textascii = 'This is an "example" of using DOM splitText';
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($textascii);
    $do
    ->appendChild($node);
    
    pr;
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("a", 1);
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
    $tester->start();
    var_dump(__METHOD__);
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
    zerofill(7, $link, 'BIGINT');
    set_exception_handler("foo");
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    var_dump(pcntl_wexitstatus($status));
    ini_set("soap.wsdl_cache_enabled",0);
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
    stream_filter_register('user_filter','user_filter');
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    $curl = curl_init("http://www.google.com");
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
    var_dump(strncasecmp("test ", "E", 0));
    var_dump(soundex("Knuth"));
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $stmt->execute();
    $test = array("A\x00B" => "Hello world");
    var_export($test);
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( reset($array_test) );
    var_dump(c1::$a2);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("html"));
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
    zerofill(11, $link, 'DECIMAL');
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    var_dump(soundex("Euler")       == soundex("Ellery"));
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
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
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
    $tester->close();
    $date = new DateTime("2011-05-17T22:14:12");
    $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    var_dump($date->format("D") == $date2->format("D"));
    define('OBJECT_COUNT', 10000);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->stopBuffering();
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    $curl = curl_init("http://www.google.com");
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $filename = __DIR__ . '/bug77432.phar';
    unlink($filename);
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    $url = ""
        . "php://filter/read="
        . urlencode("convert.iconv.ISO-8859-15/UTF-8")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
        . "/resource=data://text/plain,foob%E2r";
    var_dump(urlencode(file_get_contents($url)));
    session_set_save_handler(new \SessionHandler(), true);
    var_dump(-2147483647 % -1);
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
    set_time_limit(5);
    $values = ini_get_all();
    foreach ($values as $name => $dsn)
            if ('pdo.dsn.mysql' == $name) {
                printf("pdo.dsn.mysql=%s\n", $dsn);
                $found = true;
                break;
            }
    printf("pdo.dsn.mysql=%s\n", $dsn);
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
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
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    session_start();
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
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->addFromString('test.txt', 'text');
    $datatypes = array(
            MYSQLI_TYPE_TINY => "TINY",
            MYSQLI_TYPE_SHORT => "SHORT",
            MYSQLI_TYPE_LONG => "LONG",
            MYSQLI_TYPE_FLOAT => "FLOAT",
            MYSQLI_TYPE_DOUBLE => "DOUBLE",
            MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
            MYSQLI_TYPE_LONGLONG => "LONGLONG",
            MYSQLI_TYPE_INT24 => "INT24",
            MYSQLI_TYPE_DATE => "DATE",
            MYSQLI_TYPE_TIME => "TIME",
            MYSQLI_TYPE_DATETIME => "DATETIME",
            MYSQLI_TYPE_YEAR => "YEAR",
            MYSQLI_TYPE_ENUM => "ENUM",
            MYSQLI_TYPE_SET	=> "SET",
            MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
            MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
            MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
            MYSQLI_TYPE_BLOB => "BLOB",
            MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
            MYSQLI_TYPE_STRING => "STRING",
            MYSQLI_TYPE_NULL => "NULL",
            MYSQLI_TYPE_NEWDATE => "NEWDATE",
            MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
        );
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
    $unset_var = 10;
    class classA
    {
      public function __toString() {
        return "key";
      }
    }
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
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    et_basename;
    $arg = new Stdclass();
    print_r($arg);
    var_dump(soundex("Hilbert"));
    var_dump(ini_get('mysqlnd.debug'));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 15 ]);
    $rc = new ReflectionClass(B::class);
    var_dump($rc->getStaticProperties());
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    $a[10] = "42";
    var_dump($a["10"], isset($a["10"]));
    $im = imagecreate(800, 800);
    test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
    printf("printf test 5:%-10.2f\n", 2.5);
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
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    test('Proxy', $obj);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    undefined_function();
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//22');
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
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
    var_dump(tidy_get_body($t));
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    mkdir($targetDir, 0777, true);
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
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    $callable($nodes);
    $s = "1234567890a";
    $i = "010";
    var_dump($s[$i], isset($s[$i]));
    function t3()
    {
        ob_start("test");
            echo "Hello from t3 1 ";
            ob_clean();
            echo "Hello from t3 2 ";
            ob_end_flush();
    }
    t3();
    $res->free();
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
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    ith_cp($d1, 65001);
    
    touch("$d0\\;
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    lor(10,100);
    imagefill($im1, 0,0, 0x
    fffff);
    imagegd2($im1, $file);
    ;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 400));
    var_dump($this->getConst());
    $oldcwd = getcwd();
    chdir($oldcwd);
    ini_set("intl.error_level", E_WARNING);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    display([ $stmt2->fetch() ]);
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
    var_dump($row['bit_column_1']);
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
    $style = array();
    imagesetstyle($im, $style);
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
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
    byReference($array);
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
    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    var_dump(json_decode('{"":"value"}', true));
    var_dump(sprintf("%.988f", 1.23456789e10));
    set_exception_handler(function () { print "EX\n"; });
    function PostEvents($x) {
        var_dump($x);
        exit();
      return $x;
    }
    var_dump($x);
    printf("# Proxy:\n");
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
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "length: %d\n", count($r) );
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
    ob_start("test");
    var_dump(range('a', 'z', 100));
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
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
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setTimeZone('Europe/Berlin');
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->addFromString('test.txt', 'text');
    var_dump($_SESSION);
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_mkdir($ftp, 'CVS'));
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    printf("printf test 1:%s\n", "simple string");
    pcntl_sigwaitinfo($a,$a);
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    error_reporting(E_ALL);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
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
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    $w->compressFiles(Phar::GZ);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->addFromString('test.txt', 'text');
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "attributes", fn ($n) => $n->attributes());
    register_shutdown_function(function () {
        echo "register_shutdown_function()\n";
        throw new \Exception('shutdown');
    });
    fclose($this->stream);
    $dir = opendir('foo://bar');
    closedir($dir);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    byRef(C[0]);
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    };
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $dom->documentElement->appendChild($test1);
    $filename = "bug51997.bz2";
    unlink($filename);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $rcrt = openssl_x509_read($cert);
    var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
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
    $foo = new FooBar();
    print_R($foo);
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $result->close();
    $list = new SplDoublyLinkedList();
    $list->push('f');
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    set_time_limit(5);
    var_dump($_POST);
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $a = bar($gen);
    $a->rewind();
    set_exception_handler(null);
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    usort($array, function($a, $b) use (&$array, &$ref) {
        unset($array[2]);
        $ref = $array;
        return $a <=> $b;
    });
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $reader->close();
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $it->next();
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
    class Test {
        public function __debugInfo() {
            return [$this];
        }
    }
    var_dump(new Test);
    var_dump(strncmp("test ", "e", -1));
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
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
    $dir = opendir('foo://bar');
    closedir($dir);
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
    class B extends P {
        protected function common() {
            echo __METHOD__, "\n";
        }
    }
    $a = new A();
    $a->test(new B());
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    var_dump ( rtrim("rtrim test        ", " ") );
    var_dump( range(1.0, 7.0, 6.5) );
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
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    foreach($result as $val) {
        $val->dump();
    }
    $val->dump();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    fclose($this->stream);
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $b->execute(array (5));
    date_default_timezone_set('Europe/Kiev');
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt = $pdo->prepare($reqOf3);
    $res = $stmt->fetchAll();
    display($res);
    printf("printf test 26:%2\$d %1\$d\n", 1, 2);
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
    $db = PDOTest::factory();
    $db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
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
    array_splice($GLOBALS,0,count($GLOBALS));
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
    var_dump($s);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
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
    printf("printf test 3:%f\n", 10.0/3);
    date_default_timezone_set('Europe/Kiev');
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) ['b' => 0]);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->close();
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
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
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
    var_dump($prefixed->lookupNamespaceURI(""));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->stopBuffering();
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
    $b = new B;
    var_dump($b->test);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    mysqli_close($link);
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
    $filename = "bug51997.bz2";
    unlink($filename);
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
    var_dump( rtrim("234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );
    var_dump($line);
    $_ = str_repeat("A", 512);
    openssl_seal($_, $_, $_, array_fill(0,64,0));
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array[1]) );
    $field = mysqli_fetch_field_direct($res, 1);
    printf("[010] Found unexpected field '%s'\n", $field->name);
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
    $list = new SplDoublyLinkedList();
    $list->next();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $xml = '
    <data id="1">
        <key>value</key>
    </data>
    ';
    $obj = simplexml_load_string($xml);
    print_r(get_object_vars($obj));
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    $im = imagecreate(800, 800);
    imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
    var_dump($i=1);
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
    $tester->close();
    $fp = fopen('php://input', 'r+');
    fclose($fp);
    $readonly_anon = new readonly class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    $readonly_anon->field = 123;
    var_dump($readonly_anon->field);
    var_dump( range(1, 7, 10.0**400) );
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
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
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    function test() {
        byVal(C[0]);
        try {
            byRef(C[0]);
        } catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
    }
    test('y');
    var_dump(soundex("Knuth")       == soundex("Kant"));
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
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
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        });
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
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
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML($html);
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -1, SEEK_SET));
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj->a);
    php_cli_server_start('http_response_code(422);');
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    printf("printf test 25:%-2s\n", "gazonk");
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
    http_server_kill($pid);
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Title']);
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
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
    $list = new SplDoublyLinkedList();
    $list->next();
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_all([$key => 1], static fn () => false));
    ob_clean();
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    $offsets = array(20, 21, 22, 53, 54);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    $needle = base64_decode('44CC');
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    set_exception_handler(null);
    var_dump(soundex("Gauss"));
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
    var_dump( strftime($value) );
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($contentfile);
    $list = new SplDoublyLinkedList();
    $list->rewind();
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    $start_key = 0;
    $num = 2;
    $unset_var = 10;
    class test
    {
      var $t = 10;
      function __toString()
      {
        return "testObject";
      }
    }
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
    var_dump( array_fill($start_key , $num , $val) );
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    (stat("$d0\\test0.txt")) > 0);
    
    unlink("$d0\;
    register_shutdown_function('ABC');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    var_dump(mhash(133, 1086849124, 133));
    grapheme_stripos(1,1,2147483648);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    $tester = new FPM\Tester($cfg);
    $tester->expectLogTerminatingNotices();
    $host = curl_cli_server_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_VERBOSE, true);
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
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    class Test {
        public static function __callStatic($method, $args) {}
        public function __call($method, $args) {}
    }
    function do_throw() { throw new Exception; }
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    function test($case) {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $fn = "bug71263.bz2";
        $compressed = (string) bzcompress($plain);
        echo "Compressed len = ", strlen($compressed), "\n";
    
        if ($case == 1) {
            // Set a random byte in the middle of the compressed data
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays empty string then garbage, no errors detected:
            $compressed[strlen($compressed) - 15] = 'X';
        } else if ($case == 2) {
            // Truncate the compressed data
            // --> php_bz2_decompress_filter() does not detect errors,
            // --> fread() displays the empty string:
            $compressed = substr($compressed, 0, strlen($compressed) - 20);
        } else {
            // Corrupted final CRC
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays an empty string, then the correct plain text, no error detected:
            $compressed[strlen($compressed)-2] = 'X';
        }
    
        file_put_contents($fn, $compressed);
    
        $r = fopen($fn, "r");
        stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
        while (!feof($r)) {
            $s = fread($r, 100);
            echo "read: "; var_dump($s);
        }
        fclose($r);
        unlink($fn);
    }
    test(3);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    fwrite($fp, "test");
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt = $pdo->prepare($reqOf3);
    $res = $stmt->fetchAll();
    display($res);
    $test = array("A\x00B" => "Hello world");
    debug_zval_dump($test);
    $filename = "bug51997.bz2";
    unlink($filename);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $it->rewind();
    function foo() {
        $x = 1.0;
        $x += 0;
        return ++$x; // mem -> reg, reg
    }
    var_dump(foo());
    );
        var_dump($d == get_base;
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
    foreach( $strings_with_nulls as $string )  {
      echo "\n--- Iteration $counter ---\n";
      var_dump( strtok($string, "\0") );
      for($count = 1; $count <= 5; $count++)  {
        var_dump( strtok("\0") );
      }
      $counter++;
    }
    var_dump( strtok($string, "\0") );
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    byVal(C[0]);
    function byVal($arg) {
        var_dump($arg);
    };
    var_dump(range(1.5, 3.5, -1.5));
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML($html);
    set_exception_handler(function () { print "EX\n"; });
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
    $link = mysqli_init();
    $link->set_charset('sjis');
    set_exception_handler(null);
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
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
    function dumpElement() {
        list($value) = yield;
        var_dump($value);
    }
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Title']);
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    var_dump(range('a', 'c', -1));
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    var_dump(session_save_path());
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    class derived extends base {
        function show() {
            echo "derived\n";
        }
        function test() {
            echo "test\n";
            $this->show();
            parent::test();
            parent::show();
        }
    }
    $t = new derived();
    $t->test();
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
    $a = array(1,2,3);
    $s1 = "some string";
    var_dump($a + $s1);
    ini_set("intl.error_level", E_WARNING);
    function test(array... $args) {
        var_dump($args);
    }
    test();
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
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    checktimeout($s, 500);
    var_dump(1);
    var_dump ( rtrim("rtrim test        ", true) );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    est1.txt");
    
    rmdir($d0);
    ;
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTML"));
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
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
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
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
    printf("# %s\n", $name);
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    var_dump($foo);
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $root->__construct("malformed");
    printf("printf test 25:%-2s\n", "gazonk");
    byVal(C[0]);
    function byVal($arg) {
        var_dump($arg);
    };
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    $callable($nodes);
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
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
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
    function t3()
    {
        ob_start("test");
            echo "Hello from t3 1 ";
            ob_clean();
            echo "Hello from t3 2 ";
            ob_end_flush();
    }
    t3();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    debug_print_backtrace();
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                $trace_file,
                filesize($trace_file));
    var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
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
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
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
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test');
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $offsets = array(20, 21, 22, 53, 54);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    $needle = base64_decode('44CC');
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    printf( "testarray: %s\n", $r2[2] );
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('UTC'));
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
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    display([ $stmt2->fetch() ]);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->execute();
    spl_autoload_register(function ($class) {
        if (!require_once($class.'.inc')) {
            error_log('Error: Autoload class: '.$class.' not found!');
        }
    });
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $offset3 = "offset";
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    var_dump(soundex("Hilbert") == soundex("Ladd"));
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
    $foo = new FooBar();
    print_R($foo);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    var_dump(-2147483647 % -1);
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
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Orgtable     : %s\n", $field->orgtable);
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
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
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    php_cli_server_start($code, null, $args);
    $db = PDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    
    $xmlstring = '<?xml ve
    ion="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($file
    ame, $xmlstring);
    
    $reader = new XMLReade;
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI("a"));
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
    zerofill(4, $link, 'MEDIUMINT');
    set_error_handler(function (int $errno, string $errstring): never {
        throw new Exception($errstring);
    });
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    }
    var_dump($arg);
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    var_dump(file_exists($filename));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    var_dump(range('a', 'c', -1));
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
    class B extends P {
        protected function common() {
            echo __METHOD__, "\n";
        }
    }
    $a = new A();
    $a->test(new B());
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          'The ISO 8601:1988 week number' => "%V",
          'Weekday as decimal' => "%u",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmstrftime($value) );
          var_dump( gmstrftime($value, $timestamp) );
    }
    var_dump( gmstrftime($value, $timestamp) );
    setlocale(LC_ALL, 'de_DE', 'de-DE');
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
    (new B)->bar();
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    class A {
        public $b;
    }
    $a = new A;
    var_dump(serialize($a));
    $fp = php_cli_server_connect();
    fclose($fp);
    class_alias( 'stdClass', '_' );
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
    var_dump(tidy_get_body($t));
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    $users = MailBox::USERS;
    $to = $users[0];
    $bcc = $users[2];
    foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
        $mailBox = MailBox::login($mailAddress);
        $mail = $mailBox->getMailsBySubject($subject);
        $mailBox->logout();
    
        if ($mail->isAsExpected($from, $to, $subject, $message)) {
            echo "Found the email. {$recipient} received.\n";
        }
    
        if ($mail->getHeader('X-Mailer') === $xMailer) {
            echo "The specified x-Mailer exists.\n\n";
        }
    }
    $mailBox = MailBox::login($mailAddress);
    $mailBox->logout();
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    $filename = "bug51997.bz2";
    unlink($filename);
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    mkdir($targetDir, 0777, true);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump($originalEnvelopeData === $envelopeData);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
    function test($x) {
        switch ($x->y) {
            default:
                throw new Exception;
            case 'foobar':
                return new stdClass();
                break;
        }
    }
    $x = (object)['y' => 'foobar'];
    var_dump(test($x));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    est0.txt");
    unlink("$d1\\;
    mysqli_free_result($res);
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    $dom = new DOMDocument();
    $dom->loadXML('<root><child/></root>');
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array($ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $im = imagecreate(800, 800);
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    set_exception_handler(function() {
        echo 'Fourth handler' . PHP_EOL;
    });
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    bar();
    function bar() {
        boo();
    };
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
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->after('bar', $doc->documentElement->firstChild, 'baz');
    var_dump(self::$x);
    function test(array... $args) {
        var_dump($args);
    }
    test();
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    var_dump(spl_autoload_functions());
    $tester = new FPM\Tester($cfg);
    $tester->start();
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
    var_dump(array_pop($input), $input);
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(false, true);
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
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    ;
    function test()
    {
        echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
    }
    test();
    date_default_timezone_set("UTC");
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
    var_dump( current($sub_array) );
    set_error_handler(
                function ($errno, $errstr, $errfile, $errline) {
                    $this->handleError($errno, $errstr, $errfile, $errline);
                }
            );
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
    function test($case) {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $fn = "bug71263.bz2";
        $compressed = (string) bzcompress($plain);
        echo "Compressed len = ", strlen($compressed), "\n";
    
        if ($case == 1) {
            // Set a random byte in the middle of the compressed data
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays empty string then garbage, no errors detected:
            $compressed[strlen($compressed) - 15] = 'X';
        } else if ($case == 2) {
            // Truncate the compressed data
            // --> php_bz2_decompress_filter() does not detect errors,
            // --> fread() displays the empty string:
            $compressed = substr($compressed, 0, strlen($compressed) - 20);
        } else {
            // Corrupted final CRC
            // --> php_bz2_decompress_filter() detects fatal error
            // --> fread() displays an empty string, then the correct plain text, no error detected:
            $compressed[strlen($compressed)-2] = 'X';
        }
    
        file_put_contents($fn, $compressed);
    
        $r = fopen($fn, "r");
        stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
        while (!feof($r)) {
            $s = fread($r, 100);
            echo "read: "; var_dump($s);
        }
        fclose($r);
        unlink($fn);
    }
    test(2);
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    var_dump($dt);
    set_exception_handler(function() {
        echo 'Fourth handler' . PHP_EOL;
    });
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    $depth0 = "depth02";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    printf("[002] [%d] %s\n", $link->errno, $link->error);
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
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->close();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
    debug_print_backtrace();
    $offsets = array(20, 21, 22, 53, 54);
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    function t3()
    {
        ob_start("test");
            echo "Hello from t3 1 ";
            ob_clean();
            echo "Hello from t3 2 ";
            ob_end_flush();
    }
    t3();
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    var_dump(spl_autoload_unregister($callback2));
    var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    $dom = new DOMDocument;
    $dom->loadXML(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 attr="x"/>
    </root>
    XML);
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
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
    var_dump($ffi->bug_gh16013_return_short());
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $dom->documentElement->appendChild($test1);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    fwrite($fp, "test");
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
    $im = imagecreate(10,10);
    trycatch_dump(
        fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
    );
    $eml = __DIR__ . "/signed.eml";
    var_dump(openssl_pkcs7_verify($eml, 0));
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
    var_dump($pdo->query('SELECT 42')->fetchColumn(0));
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    $msgfmt->parse('abc');
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
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
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    var_dump(file_exists($filename));
    $dom = new DOMImplementation();
    $type = $dom->createDocumentType('html');
    var_dump($type->childNodes);
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
    $fn = "bug71263.bz2";
    unlink($fn);
    #[AllowDynamicProperties]
    class C {
        public int $a = 1;
        public function __construct() {
            var_dump(__METHOD__);
        }
    }
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
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C();
    });
    test('Proxy', $obj);
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
    var_dump(mhash(133, 1086849124, 133));
    $client2 = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("")
        ],
      ]),
    ]);
    $client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $file = __DIR__ . "/bug71127.inc";
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    printf("printf test 1:%s\n", "simple string");
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testtable'];
    printf( "testtable: %d\n", $r2['major'] );
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    $o->foo();
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    var_dump($sends1);
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 8));
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump($data);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
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
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    var_dump( range(1, 7, 10.0**400) );
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
    $tester->start();
    var_dump(error_reporting());
    $tester = new FPM\Tester($cfg);
    $tester->expectLogStartNotices();
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump(json_decode('{"":"value"}', true));
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $arr = [$class];
    var_dump(json_encode($arr));
    printf("printf test 6:%-010.2f\n", 2.5);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    $array = new ArrayObject();
    var_dump($array->offsetExists('nokey'));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
    $eml = __DIR__ . "/signed.eml";
    $empty = "";
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
    printf("printf test 1:%s\n", "simple string");
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    var_dump(strncmp("test ", "e", -1));
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
    var_dump( strftime($value) );
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    var_dump($_SESSION);
    date_default_timezone_set('Europe/Kiev');
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastRequestHeaders());
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    est1.txt");
    
    rmdir($d0);
    ;
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
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    var_dump(sprintf("%%", 1.23456789e10));
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
    var_dump(get_class_vars(C::class));
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    var_dump(spl_autoload_unregister($callback1));
    $im = ImageCreateTrueColor(10, 10);
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    ImageFillToBorder($im, 5, 5, $bordercolor, $color);
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    var_dump($foo[0]);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Length       : %d\n", $field->length);
    function foo() {
      var_dump("hello");
    }
    foo();
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    $a=glob("./*.jpeg");
    var_dump($a);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    dir($d1);
    
    ;
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    var_dump(defined('SO_REUSEPORT'));
    printf("# Ghost:\n");
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
    var_dump($ffi->bug_gh16013_return_short());
    function foo(): never {
        if (false) {
            throw new Exception('bad');
        }
    }
    foo();
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//2');
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
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    http_server_kill($pid);
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
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
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI(""));
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    var_dump(-9_223_372_036_860_776_000 % -1);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
    $fp = fopen(__DIR__."/test2.csv", "r");
    fclose($fp);
    mysqli_close($link);
    register_shutdown_function(function (): void {
        foreach (get_resources() as $res) {
            if (get_resource_type($res) === 'persistent stream') {
                echo "ERROR: persistent stream not closed\n";
                return;
            }
        }
        echo "OK: persistent stream closed\n";
    });
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
    var_dump((new Exception)->getTrace());
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
    var_dump( strftime($value) );
    var_dump(session_save_path());
    set_error_handler("customErrorHandler");
    printf("printf test 2:%d\n", 42);
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $zip = new ZipArchive();
    $zip->open($filename);
    var_dump(__METHOD__);
}
$im = imagecreate(800, 800);
imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
