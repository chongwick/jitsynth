<?php
$a = "lest";
$a[0] = "f";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
}
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
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
bar('first try');
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
