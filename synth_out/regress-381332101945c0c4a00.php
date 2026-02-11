<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
$unset_var = 10;
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
function f_0() {
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    $b = 'x';
}
function f_1() {
    return "Class A object";
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $magic_file = __DIR__ . '/bug79283.db';
        file_put_contents($magic_file, "
        0	regex	\\0\\0\\0\\0	Test
        ");
    }
}
md5('foo');
