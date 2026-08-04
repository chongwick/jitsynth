<?php
class Test {
    public readonly int $prop;

    public function __construct() {
        $this->prop = 1;
    }

    public function rw() {
        $this->prop += 1;
        echo "Done\n";
    }
}

$test = new Test();
try {
    $test->rw();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
?>
DONE
