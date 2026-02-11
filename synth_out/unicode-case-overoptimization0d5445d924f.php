<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $db = PDOTest::factory();
    $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
    $is_oci = $driver == 'oci';
    $dom = new DOMImplementation();
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
}
