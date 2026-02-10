<?php
function f_0() {
}
function f_1() {
    $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
    $tz1 = new DateTimeZone('Europe/Berlin');
    $id_2_date = '2014-09-24';
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    $it = new RecursiveIteratorIterator($iterator);
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
}
function f_2() {
    $array = [0];
    $cert = file_get_contents(__DIR__ . "/public.crt");
    $baz = (float)$foo;
    $a = new A();
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $stmt = $db->query($sql);
    $string = str_repeat("A", 1024);
    $a = [1,2,3];
}
var_dump($db->query('SELECT * FROM test_33689'));
var_dump(substr_count("", "a", 0, 0));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump($foo);
var_dump($target);
call_user_func('bar','second try');
