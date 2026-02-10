<?php
function f_0() {
    return $db;
}
function f_1() {
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
}
$immutable = \DateTimeImmutable::createFromInterface($mutable);
$element->prepend('x', new DOMEntity);
php_cli_server_start($code, null, $args);
$m = $r->getStaticProperties();
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
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
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test("http://test@127.0.0.1");
var_dump($dom->getElementById('x')?->nodeName);
$stmt->execute([ 32 ]);
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$f->start();
var_dump($node->textContent == $text);
var_dump(soundex("Gauss"));
var_dump(__METHOD__);
$reflector = new ReflectionClass(C::class);
$list->add(1, 1);
$a = Array();
test('Proxy', $obj);
$callback1 = [$o, 'trampoline1'];
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
$tester
    ->request('', ['SCRIPT_FILENAME' => null])
    ->expectHeader('Status', '404 Not Found')
    ->expectError('Primary script unknown');
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
var_dump($ffi->bug_gh16013_return_struct());
var_dump(c1::$a3);
$list->next();
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
$total = 10000;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
    set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
    asort($list);
}
$tester = new FPM\Tester($cfg);
$f = __DIR__."/data/test.txt.gz";
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
var_dump(`$php -n -v`);
ini_set("intl.error_level", E_WARNING);
$stmt->close();
$oIntlDateFormatter->setPattern('VV');
$result = get_declared_classes();
var_dump($res);
var_dump($dom->lookupNamespaceURI(""));
byReference($array);
dumpNodeList($dom->getElementsByTagName("foo:html"));
$stmt = $db->prepare("SELECT 1");
$meta = $meta[0];
ttributeNo(0);
            echo $reade;
$arg->name = array();
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
$cfg['main'] = <<<EOT
[global]
error_log = {{FILE:LOG}}
log_level = notice
include = {{INCLUDE:CONF}}
EOT;
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
$thirty = M_PI / 6.0;
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
function f_3() {
    return $x;
}
function f_4() {
}
printf("Charsetnr    : %d\n", $field->charsetnr);
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
test('Proxy', $obj);
$id_2_date = '2014-09-24';
var_dump(test());
rmdir($dest . '/test/empty');
