<?php
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
var_dump(__METHOD__);
$list = new SplDoublyLinkedList();
$list->rewind();
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$c = $b;
var_dump($b, $GLOBALS['b'], $c);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
$dyadic = 0.00000000000045474735088646411895751953125;
var_dump($_POST);
var_dump( range(1, 7, 0) );
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
$array = new ArrayObject();
$array->offsetSet('key', 'value');
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
$meta_res = $stmt->result_metadata();
for ($field_idx = 0; $field_idx < $meta_res->field_count; $field_idx++) {
        $field = $meta_res->fetch_field();
        printf("Field        : %d\n", $field_idx);
        printf("Name         : %s\n", $field->name);
        printf("Orgname      : %s\n", $field->orgname);
        printf("Table        : %s\n", $field->table);
        printf("Orgtable     : %s\n", $field->orgtable);
        printf("Maxlength    : %d\n", $field->max_length);
        printf("Length       : %d\n", $field->length);
        printf("Charsetnr    : %d\n", $field->charsetnr);
        printf("Flags        : %d\n", $field->flags);
        printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
        printf("Decimals     : %d\n", $field->decimals);
    }
printf("Field        : %d\n", $field_idx);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
$fp = tmpfile();
rewind($fp);
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
