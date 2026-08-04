<?php

abstract class a
{
    private int $v = 1;

    public function test(): void
    {
        var_dump($this->v);
        (function (): void {
            var_dump($this->v);
        })();
    }
}

final class b extends a {
    private int $v = 0;
}
$a = new b;

for ($i = 0; $i < 10; $i++) {
    $a->test();
}

?>
