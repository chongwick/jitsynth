<?php
$dfp = opendir ( __DIR__ );
$stmt = $db->query($sql);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
}
$isEmpty = $MySQL_Ext->isEmpty();
