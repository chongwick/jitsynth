<?php

function gen() {
    yield 1;
    yield 2;
    return 3;
};

opcache_jit_blacklist(gen(...));

for ($i = 0; $i < 2; ++$i) {
    foreach (gen() as $val) {
        var_dump($val);
    }
}
?>
DONE
