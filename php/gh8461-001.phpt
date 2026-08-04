<?php

// Checks that JITed code does not crash in --repeat 2 after the UniqueList
// class is recompiled.

require __DIR__ . '/gh8461-001.inc';

class UniqueListLast extends UniqueList
{
    public static function bar() {
        parent::foo();
    }
}

for ($i = 0; $i < 10; $i++) {
    UniqueListLast::bar();
}

// mark the file as changed (important)
touch(__DIR__ . '/gh8461-001.inc');

print "OK";
?>
