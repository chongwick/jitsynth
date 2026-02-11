<?php
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$fd = fopen('php://memory','w');
$filter = stream_filter_append($fd, 'user_filter');
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$varchar_col = odbc_result($res, "VARCHAR_COL");
function f_0() {
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    $fp = fopen('php://input', 'r+');
}
function f_1() {
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
$time = '2000-01-01 00:00:00.000000';
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        var_dump($obj);
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
