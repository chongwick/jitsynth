<?php
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
$conn = pg_connect($conn_str);
$table='test_68638';
var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
session_set_save_handler(new \SessionHandler(), true);
