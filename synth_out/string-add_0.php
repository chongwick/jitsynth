<?php
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
var_dump( strrchr($special_chars_str, $needle) );
var_dump($i=$x);
$dt->setTimezone(new DateTimeZone('America/Boise'));
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
mkdir($targetDir, 0777, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$counter = 1;
var_dump($body->lookupNamespaceURI(""));
var_dump($a["10"], isset($a["10"]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
var_dump( $count );
$DB = new DB();
var_dump( strtok("\0") );
$args = array($ar1);
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
byRef(C[0]);
$inner = 'r:2;';
var_dump(sprintf("%%%.2f", 1.23456789e10));
$tempnum = 12345;
debug_zval_dump($references);
file_get_contents('dummy://foo', false, $context);
var_dump( array_reverse($array) );
var_dump($initialRequest ? $x : $y);
var_dump($row);
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
var_dump(str_contains($response, "authorization"));
test("http://t[est@[::1");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
ini_set("intl.error_level", E_WARNING);
foo(false, false);
$stmt->execute();
var_dump($output);
var_dump($finfo->buffer("buffer\n"));
closedir($dir);
printf("printf test 24:%.5s\n", "abcdefghij");
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
$f->__invoke($t->bar(Test::foo(do_throw())));
var_dump(array_column($array, 'superhero'));
$list->push('o');
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$v[$i] = 'hi'.$i;
$list->rewind();
var_dump(lookup(510));
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$myClass_object = new myClass();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $foo_object = new foo();
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump($body->lookupNamespaceURI(""));
        printf("Length       : %d\n", $field->length);
    }
}
