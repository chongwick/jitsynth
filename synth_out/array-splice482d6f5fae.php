<?php
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
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
var_dump($row);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Length       : %d\n", $field->length);
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve
;
$cl = new bug8318;
$cl->fpassthru();
php_cli_server_start('http_response_code(422);');
$db = createDB();
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
var_dump(strncmp("test ", "e", 10));
