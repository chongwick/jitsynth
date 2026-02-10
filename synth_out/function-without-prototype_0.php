<?php
function f_0() {
    $stmt->close();
    $tester->expectLogNotice($userMessage, 'bbbb');
    $user = PDO_MYSQL_TEST_USER;
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    $arr();
}
function f_1() {
    $tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    var_dump($a + $s1);
    var_dump(array_map(assert(...), [true, true, false]));
}
call_user_func_array($ffi->$func_ptr, $argv);
var_dump( range('A', 'H', fdiv(0, 0)) );
var_dump((new Exception)->getTrace());
var_dump(is_callable(array($this, 'static::testIsCallable2')));
$halves[0] = $halves[1] = 0;
var_dump($foo[0]);
odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
call_user_func("static::ok");
$a = "20";
foo();
