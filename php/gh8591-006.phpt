<?php

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

var_dump($x);

print "OK";
?>
