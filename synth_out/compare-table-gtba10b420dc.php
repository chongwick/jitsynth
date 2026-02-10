<?php
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
$x = match (true) {};
class foo
{
  function __toString() {
    return "Object";
  }
}
$object1 = new foo();
$dfp = opendir ( __DIR__ );
$GLOBALS['b'] = 3;
function f_0() {
    return [$this];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $filename = "bug51997.bz2";
            $bz = bzopen($filename, "r");
            $object = new StdClass();
            $argv = null;
            $a[10] = "42";
            var_dump($a["010"], isset($a["010"]));
            $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
            unlink($tmpFileIn);
            $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
            $xml = simplexml_load_string($xmlString);
            $nodes = $xml->a->b;
            function test($nodes, $name, $callable) {
                echo "--- $name ---\n";
                foreach ($nodes as $nodeData) {
                    echo "nodeData: " . $nodeData . "\n";
                    $callable($nodes);
                }
            }
            test($nodes, "asXml", fn ($n) => $n->asXml());
        }
    }
    $db = getDbConnection();
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            function g() {
                yield 'foo';
                Fiber::suspend();
            }
            var_dump(yield from g());
        }
    }
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
