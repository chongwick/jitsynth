<?php

// Checks that JITed code does not crash in --repeat 2 after the UniqueList
// class is recompiled.

require __DIR__ . '/gh8461-002.inc';

for ($i = 0; $i < 10; $i++) {
    UniqueList::foo();
}

// mark the file as changed (important)
touch(__DIR__ . '/gh8461-002.inc');

print "OK";
?>
