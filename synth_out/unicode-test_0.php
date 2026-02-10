<?php
$filename = __DIR__ . '/bug77432.phar';
$message = 'hello';
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$heredoc = <<<EOT
Hello world
EOT;
$args[] = php_ini_loaded_file();
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
$dbh = @pg_connect($conn_str);
$b = new A();
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
$needle = base64_decode('44CC');
$a->foo = $x;
function f_0() {
    $start_key = 0;
    $this->b = 2;
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
        if (true) {
            $_ = str_repeat("A", 512);
        }
        $counter++;
    }
    $twoseventy = M_PI * 1.5;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            printf("# %s\n", $name);
        }
    }
    $link->close();
    return [(array)$this];
}
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
$ok = false;
$auz = new DateTime($time, $tz_aus);
undefined_function();
$m['data1'] = 100;
$var = -PHP_INT_MAX - 1;
unlink($tmpFileIn);
var_dump(A::fromArray(['a' => 'foo']));
var_dump(is_callable(array($this, 'static::testIsCallable2')));
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
php_cli_server_start($code, null, $args);
var_dump($oIntlDateFormatter->getTimeZone()->getID());
printf("printf test 15:%b\n", 170);
phpinfo(INFO_MODULES);
curl_setopt($ch, CURLOPT_USERPWD, null);
test('Proxy', $obj);
register_shutdown_function('exploDe');
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $count++;
    $date = new DateTimeImmutable('2022-10-09 02:41:54.515330', new DateTimeZone('America/Los_Angeles'));
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    spl_autoload_register(function ($name) {
});
    var_dump($n);
    $this->extData[] = 'Bar';
    $reflector = new ReflectionClass(C::class);
    $this->logOffEvent = $logOffEvent;
    $diff = $ago->diff($now, true);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
        if (true) {
            if (true) {
                $deflator = deflate_init(ZLIB_ENCODING_RAW);
                $obj->c = 1;
            }
            if (!true) {
                $object2 = new foo1();
                $x = 'abc';
            }
        }
    }
    $zip = new ZipArchive();
    $a = bar($gen);
    $t = new derived();
    set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
}
function f_5() {
    ched = $node->splitText($start);
$ma;
    if (true) {
        return true;
    }
    if (!true) {
        return "Object1";
    }
}
function f_6() {
    c1::$a1[] = 1;
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $a = 4;
        if (true) {
            $heredoc = <<<EOT
hello world
EOT;
        }
        if (!true) {
            if (true) {
                $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
            }
            if (!true) {
                $stmt = $mysql->prepare("SELECT id FROM temp");
            }
        }
    }
    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
}
$compressed[strlen($compressed)-2] = 'X';
$xp = new DOMXPath($domd);
$a = new A();
var_dump(file_get_contents($uri));
undefined_function();
