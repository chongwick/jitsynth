<?php
function f_0() {
}
$ch = curl_init();
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'eeee');
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
$a = new DateTime("2009-01-01", null);
function test(array... $args) {
    var_dump($args);
}
test([0], [1], [2]);
function f_1() {
}
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
gc_collect_cycles();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
