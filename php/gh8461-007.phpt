<?php

for ($i = 0; $i < 100; $i++) {
    UniqueListLast::bar();
}

for ($i = 0; $i < 100; $i++) {
    new UniqueListLast();
}

for ($i = 0; $i < 10; $i++) {
    test();
}

print "OK";
?>
