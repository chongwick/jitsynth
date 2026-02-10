<?php
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$fp = tmpfile();
$max = 0x66666666;
function f_0() {
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    $users = MailBox::USERS;
    $to = $users[0];
    $ok = false;
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
    $a = new Test();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    $conn = pg_connect($conn_str);
    $table='test_68638';
    $rs = pg_query($conn, "SELECT * FROM $table");
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
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $d = unpack("H*", $res);
    $fp = fopen (__FILE__, "r");
    $var = -PHP_INT_MAX - 1;
    $this->b = 2;
    if (true) {
        $textascii = 'This is an "example" of using DOM splitText';
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $diff = $now->diff($ago, true);
        $html = <<<HTML
        <div id="test"><span>hi there</span></div>
        HTML;
        $dsn = ini_get('pdo.dsn.mysql');
        $fp = fopen (__FILE__, "r");
        $file_handle = fopen(__FILE__, "r");
        $dir_handle = opendir( __DIR__ );
        $resources = array($file_handle, $dir_handle);
        $thirty = M_PI / 6.0;
        $dom = new DOMDocument;
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $PHP_SELF = 1;
    }
    if (!true) {
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
        $magic_file = __DIR__ . '/bug79283.db';
        $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
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
        $unset_var = 10;
        $dt = new DateTime('first day of January 2011');
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->use_result();
        $loop_counter = 1;
        $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
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
        $insert = null;
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $attrs = [ PDO::ATTR_PREFETCH => 0 ];
        if (true) {
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
            $ch = curl_init();
            curl_exec($ch);
            $dom = Dom\HTMLDocument::createEmpty();
            dumpNodeList($dom->getElementsByTagName("bar:HTML"));
            ob_start();
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
            $i = "010";
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
            $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
        }
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
        if (true) {
            $unset_var = 10;
            if (true) {
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
            }
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
            $dom = new DOMDocument;
            var_dump($dom->getElementById('x')?->nodeName);
            set_exception_handler(function() {
                echo 'Fourth handler' . PHP_EOL;
            });
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://test@[::1]");
            $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $pdo->exec("insert into t select n + 1, 'non '||t from t");
            function test(array... $args) {
                var_dump($args);
            }
            var_dump($args);
            $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
            $w = new Phar(__DIR__ . "/bug69279.phar.zip");
            $w->compressFiles(Phar::GZ);
            spl_autoload_register(function ($name) {
                spl_autoload_unregister("spl_autoload_call");
            });
            $before = memory_get_usage();
            $after = memory_get_usage();
            var_dump($before === $after);
            $count = 1;
            $batch_file_content = <<<EOT
            @echo off
            powershell -Command "Write-Output '%0%'"
            powershell -Command "Write-Output '%1%'"
            EOT;
            $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
            file_put_contents($batch_file_path, $batch_file_content);
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
            $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
            $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
            <books></books>';
            file_put_contents($filename, $xmlstring);
            $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
            $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $pdo->exec("create temp table t (n int, t text)");
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
            $outfile = tempnam(sys_get_temp_dir(), "ssl");
            $contentfile = tempnam(sys_get_temp_dir(), "ssl");
            $eml = __DIR__ . "/signed.eml";
            $cainfo = array();
            var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
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
            function test(string $name, object $obj) {
                printf("# %s:\n", $name);
            
                var_dump($obj);
                var_dump($obj->a);
                var_dump($obj);
            }
            var_dump($obj->a);
            $dom = new DOMDocument;
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            var_dump(gzread($h, 5));
        }
        $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
        $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
        var_dump($headers2['Author']);
        function test(string $input) {
            var_dump(filter_var($input, FILTER_VALIDATE_URL));
        }
        test("http://php.net\\@aliyun.com/aaa.do");
        var_dump(-2147483648 % -2);
        lor(10,100);
        imagefill($im1, 0,0, 0x;
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump($obj->a);
            var_dump($obj);
        }
        var_dump($obj);
        session_start();
        $a = new PDO("sqlite::memory:");
        $b = $a->prepare("insert into test_35336 (b) values (?)");
        $b->execute(array (5));
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
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('Initializer');
        }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
        $priorityQueue = new SplPriorityQueue();
        $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
        $a = new Test();
        var_dump($a->value);
        class Test{
        	public $value = 11.3;
        
        	public function TestFunc() {
        		$this->value -= 10;
        	}
        };
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
        catch (PDOException $e) {
            var_dump($e->getCode());
        }
        var_dump($e->getCode());
        $dom = Dom\HTMLDocument::createEmpty();
        var_dump($dom->lookupNamespaceURI(NULL));
        $data = [
            "name" => ["family" => AF_INET6, "addr" => "::1"],
            "buffer_size" => 2000,
            "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                    socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
        ];
        print_r($data);
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
        $doc = new \DOMDocument();
        $target = $doc->documentElement->lastChild;
        var_dump($target);
        date_default_timezone_set("Asia/Calcutta");
        #[\AllowDynamicProperties]
        class C {
            public $b;
            public function __construct() {
                $this->a = new Canary();
            }
        }
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->resetAsLazyProxy($obj, function ($obj) {
            var_dump("initializer");
            return new C();
        });
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $dyadic = 0.00000000000045474735088646411895751953125;
        var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
        printf("printf test 12:%5.2f\n", -12.34);
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
        $_SERVER = [ 'test' => 'test' ];
        define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
        class C {
            function __serialize(): array {
                global $list;
                $list->pop();
                return [];
            }
        }
        $list = new SplDoublyLinkedList;
        $list->add(0, new C);
        catch (\Error $e) {
            var_dump($e);
        }
        var_dump($e);
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
        $doc = new \DOMDocument();
        $o = new SplFileInfo('.');
        $references = array();
        debug_zval_dump($references);
        class A2 { // A1 with private function test
        	public function __call($method, $args) { echo "__call\n"; }
        	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
        	private function test() {}
        }
        class B2 extends A2 {
        	public function test(){	parent::test();	}
        }
        $test2 = new B2;
        $test2->test();
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
        set_error_handler(function (int $errno, string $errstring): never {
            throw new Exception($errstring);
        });
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
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
        $dom = new DOMDocument;
        $dom->loadXML(<<<XML
        <root>
            <test1 xml:id="x"/>
            <test2 attr="x"/>
        </root>
        XML);
        var_dump($_SESSION);
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
        setStyleAndThickness($im, $black, 6);
        var_dump(soundex("Lukasiewicz"));
        $dom = new DOMDocument;
        var_dump($dom->getElementById('x')?->nodeName);
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
        array_splice($GLOBALS,0,count($GLOBALS));
        if (true) {
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
            catch (Exception $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
            catch (Exception $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
            printf("%s: %s\n", $e::class, $e->getMessage());
            $pdo = MySQLPDOTest::factory();
            $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
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
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
            $fp = fopen(__DIR__."/test2.csv", "r");
            #[AllowDynamicProperties]
            class C {
                public $a = 1;
            }
            $c = new C();
            $a = new PDO("sqlite::memory:");
            $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
            $dom = Dom\HTMLDocument::createEmpty();
            var_dump($dom->lookupNamespaceURI("a"));
            $im = imagecreate(10,10);
            trycatch_dump(
                fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
            );
        }
    }
}
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
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $cert = "file://" . __DIR__ . "/cert.crt";
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
    $im = imagecreate(800, 800);
    test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
}
$dom = Dom\HTMLDocument::createEmpty();
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $a = array(1,2,3);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    var_dump(@$obj->dynamic++);
    session_start();
    $db = getDbConnection();
    $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
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
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
}
$_ENV = [];
$total = 10000;
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
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
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
);
    var_dump($d == get_base;
$array = [0];
$ar = array_values($array);
$ar[] = 1;
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
$ffi = FFI::cdef($header);
var_dump(strncmp("test ", "e", -1));
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
$c = new C();
foo();
function foo() {
    global $LAST;
    ($LAST = $LAST + 0) * 1;
    echo "ok\n";
};
ini_set("intl.error_level", E_WARNING);
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
test('Ghost', $obj);
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$array1 = array(1, 2);
$data_comp_func = 'compare_function';
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
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
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
printf("# %s\n", $name);
public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
$elem->ThrowException();
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
fclose($input);
sprintf('%2147483648$s, %2$s %1$s', "a", "b");
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($contentfile);
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj->a);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
public function unserialize($data)
    {
        $this->b = unserialize($data);
    }
$this->b = unserialize($data);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
var_dump ( rtrim("rtrim test0123456789", "0..9") );
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) []);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$rcrt = openssl_x509_read($cert);
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
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
$tester = new FPM\Tester($cfg);
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
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
mt_srand(1234567890);
mysqli_free_result($res);
catch (\PDOException $e) {
  var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
}
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(strncasecmp("test ", "E", 0));
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
var_dump(soundex("Lloyd"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
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
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
class A {
    public $b;
}
$a = new A;
var_dump(serialize($a));
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
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Length       : %d\n", $field->length);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
list($value) = yield;
var_dump($value);
