<?php
function f_0() {
    return 1;
}
function f_1() {
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $x = 1;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $reflector = new ReflectionClass(C::class);
        for ($i = 0; $i < 2; $i++) {
            $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
            $obj->c = 1;
        }
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
        $obj->c = 1;
    }
    return true;
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $id_1_date = '2014-09-23';
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    }
    var_dump(error_reporting());
}
