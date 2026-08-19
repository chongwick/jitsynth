<?php

interface ModelInterface
{
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
