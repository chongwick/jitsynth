<?php
$db = PDOTest::factory();
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
function f_0() {
    return 0;
}
$a = 1;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    try {
        $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
        $data = [
            Test::COURSES_ADMIN,
            Test::COURSES_REPORTING_ACCESS,
            Test::BUNDLES_ADMIN,
            Test::USERS_ADMIN,
            Test::B2B_DASHBOARD_ACCESS,
            Test::B2B_DASHBOARD_ACCESS,
            Test::INSTRUCTORS_ADMIN,
            &$instructorsAdmin,
            Test::COUPONS_ADMIN,
            Test::AUTHENTICATED,
        ];
        $data = array_unique($data, flags: SORT_REGULAR);
        $dt = new DateTime('first day of January 2011');
        $test=array();
        $out=serialize($test);
        $db = getDbConnection();
        $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
        $stmt->execute();
    } catch (Exception $e) {}
    if (true) {
    }
}
