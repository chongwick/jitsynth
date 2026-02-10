<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        class Foo {
            public $bar = [] {
                &get {
                    echo __METHOD__ . "\n";
                    return $this->bar;
                }
            }
        }
        $foo = new Foo;
        var_dump($foo);
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $ch = curl_init("https://localhost/userpwd");
        $response = curl_exec($ch);
        var_dump(str_contains($response, "authorization"));
    }
}
mysqli_close($link);
