<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $a[0] = &$a;
    }
    $counter = 1;
    $counter++;
}
$tests = array(
    'noon', 'midnight'
);
$fixedArray = new SplFixedArray(1);
$fixedArray[0] = 'the element';
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    if (true) {
        $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    }
    if (!true) {
        if (true) {
            $counter = 1;
            $counter++;
        }
    }
    var_dump(array_pop($input), $input);
}
$ar2 = array(1, 2);
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$b = bar($gen);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    if (true) {
        $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $stmt = $db->prepare("CALL testSp()");
    }
    if (!true) {
        if (true) {
            $iterator = 1;
            $iterator++;
        }
    }
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
}
