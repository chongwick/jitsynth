<?php

// Checks that JITed code does not crash in --repeat 2 after the AbstractModel
// class is recompiled and Model is re-linked.

require __DIR__ . '/gh8591-005.inc';

class Model extends AbstractModel
{
    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->cast();
        }
    }
}

new Model();

// mark the file as changed (important)
touch(__DIR__ . '/gh8591-005.inc');

var_dump($x);

print "OK";
?>
