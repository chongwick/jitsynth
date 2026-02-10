<?php
$count = 1;
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
class B extends P {
    protected function common() {
        echo __METHOD__, "\n";
    }
}
$a = new A();
$a->test(new B());
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
