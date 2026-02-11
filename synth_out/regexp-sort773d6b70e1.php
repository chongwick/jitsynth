<?php
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
class C {
    public int $a;
}
function f_0() {
    $xml = <<<'EOT'
            <!doctype html>
            <html>
                <head>
                    <title>GHSA-p3x9-6h7p-cgfc</title>
    
                    <meta charset="utf-8" />
                    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                </head>
    
                <body>
                    <h1>GHSA-p3x9-6h7p-cgfc</h1>
                </body>
            </html>
            EOT;
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
    $from = "%#$*&@()";
    $container = false;
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
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
}
function f_1() {
    $i = 0;
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    $fp = php_cli_server_connect();
    $s = 'C:15:"ReflectionClass":0:{}';
    var_dump(getopt("abcd"));
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    test('Proxy', $obj);
    $date = new DateTime("2011-05-17T22:14:12");
    $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    var_dump($date->format("D") == $date2->format("D"));
    pcntl_wait($status);
}
var_dump( range(7.0, 1.0, 6.5) );
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
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
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
$dfp = opendir ( __DIR__ );
closedir($dfp);
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
$dom = new DOMImplementation();
$type = $dom->createDocumentType('html');
var_dump($type->childNodes);
test("http://test@127.0.0.1");
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
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
