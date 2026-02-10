<?php
$index_array = array (1, 2, 3);
$node->textContent = $text;
$instance = new Foo();
$oldcwd = getcwd();
$diff = $now->diff($ago);
$this->matchers[] = $matcher;
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$b[$i] = $a[$i][0];
$stmt = $mysql->prepare("SELECT id FROM temp");
$max = 0x66666666;
$x = (object)['y' => 'foobar'];
function f_0() {
    $box = new Box();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $r = new ReflectionClass('Test2');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $array_object = array();
        if (true) {
            $stmt = $db->prepare("SELECT 1");
        }
        $count++;
    }
    $o = new C;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
        }
    }
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    return call_user_func_array($this->callback, $invocation->parameters);
}
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
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
$this->public_var = 10;
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
$extracert = file_get_contents(__DIR__ . "/cert.crt");
var_dump($rit->valid());
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
showFirstTwoItems($ai);
var_dump($a);
$reflector->initializeLazyObject($obj);
printf("printf test 10: 123456789012345\n");
bzclose($bz);
var_dump( strtr($str, $from, $to) );
printf("# Ghost:\n");
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$test = array("A\x00B" => "Hello world");
$originalEnvelopeData = "any string with \x1a is cut at this point.";
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
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
    $tester->start();
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
    $this->foo = self::A + $b;
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
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
    $phar['x'] = 'hi';
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
        if (true) {
            if (true) {
                $x = new SoapClient(__DIR__."/bug27722.wsdl");
                $tester = new FPM\Tester($cfg);
            }
            if (!true) {
                $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
                $I = new di('P10D');
            }
        }
    }
    $res = $link->query($sql);
    $argv = null;
    $timestamp = "2005-11-08T11:22:07+03:00";
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
function f_5() {
    $message = 'hello';
    if (true) {
        return "Object";
    }
    if (!true) {
        return false;
    }
}
function f_6() {
    $m['data2'] = 200;
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $me = new static;
        if (true) {
            $batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
        }
        if (!true) {
            if (true) {
                $struct = $ffi->new('struct bug_gh16013_int_struct');
            }
            if (!true) {
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
            }
        }
    }
    var_dump(fseek($fp, -32, SEEK_CUR));
}
$ar1 = array("row1" => 2, "row2" => 1);
$found = true;
$output = array();
var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
var_dump($argv);
