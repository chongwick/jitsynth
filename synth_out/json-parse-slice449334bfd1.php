<?php
function gen() {
    yield 0;
    yield from gen();
}
$gen = gen();
$dbh = @pg_connect($conn_str);
var_dump(pg_last_notice($dbh));
