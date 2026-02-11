<?php
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
$host = "localhost\0.example.com";
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $GLOBALS['b'] = 2;
        $b = &$GLOBALS['b'];
        $GLOBALS['b'] = 3;
        $a = 4;
        $c = $b;
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    }
}
function f_2() {
    return 'B';
}
var_dump(soundex("Gauss"));
function f_3() {
}
function f_4() {
    return false;
}
