<?php
function f_0() {
    $a = new PDO("sqlite::memory:");
    $rez = $a->query ("SELECT * FROM test_35336")->fetchAll(PDO::FETCH_CLASS, 'EEE');
    try {
        function test(string $name, object $obj) {
            printf("# %s\n", $name);
        
            $c = new C();
            $c->dyn = 1;
            $propReflector = new ReflectionProperty($c, 'dyn');
        
            try {
                $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
            } catch (\ReflectionException $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('initializer');
        });
        test('Proxy', $obj);
        $s = 'O:15:"ReflectionClass":0:{}';
        var_dump(unserialize($s));
    } catch (Exception $e) {}
    if (true) {
        $pass	= PDO_MYSQL_TEST_PASS;
    }
    class foo
    {
      function __toString() {
        return "Object";
      }
    }
    $object1 = new foo();
    $array_object = array();
    $array_object[0] = &$object1;
    $datatypes = array(
            MYSQLI_TYPE_TINY => "TINY",
            MYSQLI_TYPE_SHORT => "SHORT",
            MYSQLI_TYPE_LONG => "LONG",
            MYSQLI_TYPE_FLOAT => "FLOAT",
            MYSQLI_TYPE_DOUBLE => "DOUBLE",
            MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
            MYSQLI_TYPE_LONGLONG => "LONGLONG",
            MYSQLI_TYPE_INT24 => "INT24",
            MYSQLI_TYPE_DATE => "DATE",
            MYSQLI_TYPE_TIME => "TIME",
            MYSQLI_TYPE_DATETIME => "DATETIME",
            MYSQLI_TYPE_YEAR => "YEAR",
            MYSQLI_TYPE_ENUM => "ENUM",
            MYSQLI_TYPE_SET	=> "SET",
            MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
            MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
            MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
            MYSQLI_TYPE_BLOB => "BLOB",
            MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
            MYSQLI_TYPE_STRING => "STRING",
            MYSQLI_TYPE_NULL => "NULL",
            MYSQLI_TYPE_NEWDATE => "NEWDATE",
            MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
        );
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
    begin
            RAISE NOTICE ''11111'';
            return ''f'';
    end;
    ' LANGUAGE plpgsql;");
}
undefined_function('Null');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
