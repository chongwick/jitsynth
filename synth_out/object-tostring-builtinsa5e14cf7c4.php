<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        printf("# %s\n", $name);
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        var_dump($oIntlDateFormatter->getTimeZone()->getID());
    }
}
