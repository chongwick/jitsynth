<?php
class C extends stdClass {
    public int $a;
}
class DB extends mysqli {

    private function __construct($hostname, $username, $password, $database) {
        var_dump("DB::__construct() called");
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
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
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function f_0() {
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    try {
        var_dump(range('z', 'a', 100));
    } catch (Exception $e) {}
    if (true) {
        $db = MySQLPDOTest::factory();
        foreach ($db->query('SELECT * FROM test_33689') as $row) {
            print_r($row);
        }
        print_r($row);
        $start = 30;
    }
    if (true) {
        mysqli_free_result($res);
    }
}
$dsn = ini_get('pdo.dsn.mysql');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$obj = new C();
function f_1() {
    $test = array("A\x00B" => "Hello world");
    $references = array();
    $idx = 0;
    $references[$idx++]['id_copy']	= $row['id'];
    if (true) {
        $a = 1;
    }
    if (!true) {
        if (true) {
            $sql = "SELECT 11111 as `1`, 22222 as `2`";
            $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
            $res = $link->query($sql);
            $row = $res->fetch_array();
        }
        if (!true) {
            var_dump(array_map(assert(...), [true, true, false]));
        }
    }
    if (true) {
        if (true) {
            $GLOBALS['b'] = 2;
            $a = &$GLOBALS['a'];
        }
        if (!true) {
            if (true) {
                $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
                $im2 = imagecreatefrompng($dest);
            }
            if (!true) {
                if (true) {
                    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
                    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
                }
                if (!true) {
                    $reflector = new ReflectionClass(C::class);
                    $obj = new C();
                    $reflector->resetAsLazyProxy($obj, function ($obj) {
                        var_dump("initializer");
                        return new C();
                    });
                }
            }
        }
    }
    if (!true) {
        if (true) {
            if (true) {
                $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
                $reader = XMLReader::fromUri($filename);
                $reader->close();
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
            }
            if (!true) {
                if (true) {
                    $pass = "qwerty";
                    if (true) {
                        $DB = new DB();
                    }
                    if (!true) {
                        $reflection = new ReflectionClass('\DateTimeImmutable');
                        $immutable = $reflection->newInstanceWithoutConstructor();
                        $mutable = \DateTime::createFromImmutable($immutable);
                    }
                }
                if (!true) {
                    if (true) {
                        $halves[0] = $halves[1] = 0;
                    }
                    if (!true) {
                        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
                        var_dump($pdo->query('SELECT 1;')->fetchAll());
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $curl = curl_init("http://www.google.com");
                if (true) {
                    $GLOBALS['b'] = 2;
                    $a = &$GLOBALS['a'];
                }
                if (!true) {
                    if (true) {
                        $o = new TrampolineTest();
                        $callback2 = [$o, 'trampoline2'];
                    }
                    if (!true) {
                        if (true) {
                            $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
                            $phar = new Phar($fname);
                            $phar['a.php'] = '<php echo "this is a\n"; ?>';
                        }
                        if (!true) {
                            $s = "1234567890a";
                            var_dump($s["10"], isset($s["10"]));
                        }
                    }
                }
                $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
            }
            if (!true) {
                if (true) {
                    if (true) {
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
                    }
                    if (!true) {
                        if (true) {
                            $server = stream_socket_server("tcp://[::1]:1337/");
                        }
                        if (!true) {
                            $sert = "file://" . __DIR__ . "/san-cert.pem";
                            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
                        }
                    }
                }
                if (!true) {
                    setlocale(LC_ALL, "C");
                }
            }
        }
    }
    if (true) {
        debug_print_backtrace();
    }
    if (!true) {
        $pdo = MySQLPDOTest::factory();
        $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    }
}
function f_2() {
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    if (true) {
        test("str");
        $code = null;
        $err = null;
        var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $xml = simplexml_load_string($xmlString);
        $nodes = $xml->a->b;
        test($nodes, "attributes", fn ($n) => $n->attributes());
        $dom = new DOMDocument;
        $test1 = $dom->getElementById('x');
        $test1->setAttribute('xml:id', 'y');
        zerofill(7, $link, 'BIGINT');
        $tester = new FPM\Tester($cfg);
        $tester->close();
    }
}
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$a = array(1,2,3);
$s1 = "some string";
var_dump($a + $s1);
var_dump(getopt("abcd"));
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
print_r($str_instead);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
rename("phar://a.phar/x", "phar://a.phar/y");
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
$dom = new DOMDocument;
$dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
sprintf('%2147483648$s, %2$s %1$s', "a", "b");
var_dump(json_decode('{"":"value"}', true));
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($contentfile);
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
var_dump( range(1, 7, 10.0**400) );
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
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$c = "assert";
$c(false);
does_not_work();
var_dump(soundex("Gauss")       == soundex("Ghosh"));
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
php_cli_server_start($code, null, $args);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
mkdir($d1);
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
