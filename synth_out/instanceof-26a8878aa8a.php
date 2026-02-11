<?php
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
class D {
    public string $prop;
}
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
$start = 30;
$i = 0;
$j = 0;
$foo = new FooBar();
$foo[$j++] = $i++;
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $d = new D();
    var_dump($d);
}
function f_1() {
    try {
        $utfl = __DIR__ . "/sni_server_uk.pem";
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    } catch (Exception $e) {}
    if (true) {
        $test = array("A\x00B" => "Hello world");
        var_dump($test);
        stream_filter_register('user_filter','user_filter');
    }
    $count = 1;
    $count++;
}
function f_2() {
    $varOutput = ob_get_contents();
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    if (true) {
        c1::$a3[] = 1;
    }
    if (true) {
        $a = [1,2,3];
    }
    $output = array();
    $PHP_SELF = 1;
    var_dump(__METHOD__);
    php_cli_server_start('foo bar');
    error_reporting(E_ALL);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 8));
    if (true) {
        $xml = '
        <data id="1">
            <key>value</key>
        </data>
        ';
    }
    if (true) {
        $array = [0];
    }
    if (true) {
        $priorityQueue = new SplPriorityQueue();
    }
    if (!true) {
        if (true) {
            foreach($array as &$item){
                    $item['nanana'] = 'batman';
                    $item['superhero'] = 'robin';
                }
            $item['superhero'] = 'robin';
        }
    }
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
    php_cli_server_start('foo bar');
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
}
