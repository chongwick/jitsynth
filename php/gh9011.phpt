<?php
$foo = [];
$foo[] = new \Exception(); /* Native interface implemented Native instance */
$foo[] = new class () implements \Stringable /* Native interface implemented User instance */
{
    public function __toString(): string
    {
        return "bar";
    }
};

foreach ($foo as $baz) {
    for ($i = 0; $i < 64; $i++) {
        $baz->__toString();
    }
}
?>
DONE
