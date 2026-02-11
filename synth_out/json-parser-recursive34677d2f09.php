<?php
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
}
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
