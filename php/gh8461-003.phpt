<?php

// Checks that JITed code does not crash in --repeat 2 after the UniqueList
// class is recompiled.

require __DIR__ . '/gh8461-003.inc';

class UniqueListLast extends UniqueList
{
    public function __construct()
    {
        parent::__construct(self::B);
    }
}

for ($i = 0; $i < 10; $i++) {
    new UniqueListLast();
}

// mark the file as changed (important)
touch(__DIR__ . '/gh8461-003.inc');

print "OK";
?>
