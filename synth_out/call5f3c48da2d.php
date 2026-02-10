<?php
function f_0() {
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    return isset($this->array[$index]);
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
var_dump($temp_array);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
rs as $d) {
;
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_mkdir($ftp, 'CVS'));
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
$child = new ChildClass();
$child->testIsCallable2();
ob_clean();
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
$cl = new bug8318;
$cl->fpassthru();
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
$text = '<p>hello world &trade;</p>';
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
var_dump(http_get_last_response_headers());
function f_1() {
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    return $this->stub->invoke($invocation);
}
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
var_dump( range(1.0, 7.0, 6.5) );
mysqli_fetch_field($res);
var_dump(json_decode('{"key":"value", "":"value"}', true));
function f_2() {
    $heredoc = <<<EOT
    Hello world
    EOT;
    $a = new Test();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    return "Class A object";
}
class A
{
    public $a = array();

    public function __construct()
    {
        $this->a[] = new B(1);
        $this->a[] = new B(2);
    }
}
$a = unserialize(serialize(new A()));
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
var_dump(soundex("Knuth"));
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
$dbh = @pg_connect($conn_str);
pg_close($dbh);
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
function f_3() {
    return 5;
}
phpinfo(INFO_MODULES);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
var_dump(__METHOD__);
ob_end_flush();
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
var_dump(class_exists("TestClass", true));
