<?php
$dbh = @pg_connect($conn_str);
var_dump(pg_last_notice($dbh));
