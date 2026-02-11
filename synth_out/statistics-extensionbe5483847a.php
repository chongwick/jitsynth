<?php
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
var_dump ( rtrim("rtrim test   \t\0 ") );
$a = new A();
test("http://t[est@127.0.0.1");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
}
