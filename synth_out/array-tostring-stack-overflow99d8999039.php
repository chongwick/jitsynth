<?php
class dataAccessor
{
}
$db = MySQLPDOTest::factory();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    main::$dataAccessor = new dataAccessor;
}
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
