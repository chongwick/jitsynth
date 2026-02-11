<?php
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
function test(int $nr) {
    for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
}
$b = 'x';
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
var_dump($data);
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$x = new X;
$x->prop = 1;
for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
var_dump($i);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = "offset";
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$iterator = 1;
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$zip = new ZipArchive();
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
