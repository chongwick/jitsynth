<?php

// Checks that JITed code does not crash in --repeat 2 after the ModelInterface
// interface is recompiled and Model is re-linked.

require __DIR__ . '/gh8591-001.inc';

class Model implements ModelInterface
{
    protected static int $field = 1;

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->cast();
        }
    }

    private function cast()
    {
        global $x;
        $x = static::$field;
    }
}

new Model();

// mark the file as changed (important)
touch(__DIR__ . '/gh8591-001.inc');

var_dump($x);

print "OK";
?>
