<?php

// Checks that JITed code does not crash in --repeat 2 after the ModelInterface
// interface changes and Model is re-linked.

if (!isset(opcache_get_status()['scripts'][__DIR__ . '/gh8591-002.inc'])) {
    require __DIR__ . '/gh8591-001.inc';
} else {
    interface ModelInterace
    {
    }
}

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

var_dump($x);

print "OK";
?>
