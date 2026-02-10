<?php
function f_0() {
    return 0;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        class A
        {
            public string $prop;
        }
        class B
        {
            public function __toString()
            {
                global $a;
                $a = null;
                return str_repeat('a', 1);
            }
        }
        $a = new A();
        $a->prop = new B();
        if (true) {
            echo metaphone('CMXFXZXZ'), "\n";
        }
    }
}
