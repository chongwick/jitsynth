<?php
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$b = bar($gen);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            var_dump(mhash(133, 1086849124, 133));
            call_user_func(array("static","ok"));
        }
        if (!true) {
            function test()
            {
                echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
            }
            test();
        }
    }
}
