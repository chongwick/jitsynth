<?php
$simpleInterval = new DateInterval("P2D");
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
function f_0() {
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        class_alias( 'stdClass', 'bool' );
        $interval = new DateInterval('P1D');
        $dt = new DateTime('first day of January 2011');
        $dt->sub($interval);
        var_dump(ini_get('mysqlnd.debug'));
        printf("printf test 15:%b\n", 170);
    }
}
