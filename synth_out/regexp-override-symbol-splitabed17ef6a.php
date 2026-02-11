<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt->parse('abc');
$obj = new C();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
