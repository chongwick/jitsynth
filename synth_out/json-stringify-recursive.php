<?php
c1::$a3[] = 1;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $host = PHP_CLI_SERVER_HOSTNAME;
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
    $a = new Test();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
}
function f_1() {
    $text = '<p>hello world &trade;</p>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $node->textContent = $text;
    var_dump($node->textContent == $text);
    class_alias( 'stdClass', '_' );
}
function foo(): never {
    if (false) {
        throw new Exception('bad');
    }
}
foo();
$time = '9999-11-33';
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
$haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $filename = __DIR__ . '/bug77432.phar';
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 0 ]);
$epid = pcntl_waitpid(-1,$status);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
}
$this->b = 2;
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
