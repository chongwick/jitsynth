<?php
function f_0() {
    try {
        return;
    } catch (Exception $e) {}
    if (true) {
    }
}
function f_1() {
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $var = '';
        $GLOBALS['b'] = 3;
        try {
            $reflection = new ReflectionClass('\DateTimeImmutable');
            $immutable = $reflection->newInstanceWithoutConstructor();
        } catch (Exception $e) {}
        if (true) {
        }
        try {
            ++$testCasesTotal;
            ++$testCasesTotal;
        } catch (Exception $e) {}
        if (true) {
        }
        $ch = curl_init("https://localhost/username");
        $response = curl_exec($ch);
    }
}
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
reset( $array_test );
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
does_not_work();
