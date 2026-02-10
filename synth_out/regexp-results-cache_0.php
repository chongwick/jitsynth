<?php
$before = memory_get_usage();
$fp = fopen(__FILE__, "r");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(yield from g());
}
$anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
var_dump(__METHOD__);
$create = 'CREATE TABLE test(id INT, ';
$row = pg_fetch_row($res, 0);
var_dump ( rtrim("rtrim test        ", " ") );
