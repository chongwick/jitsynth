<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $db->prepare("SELECT 1");
    $offset3 = "offset";
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $response = ob_get_contents();
    }
}
