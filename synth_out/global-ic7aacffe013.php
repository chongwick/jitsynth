<?php
function f_0() {
    return 0;
}
function f_1() {
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    $instance = new Foo();
    return $instance->bar;
}
function f_2() {
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
}
function f_3() {
    return 5;
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    function Test($param) {
        global $g;
        $g = $param->strA."\n".$param->strB."\n";
        return $g;
    }
    $g = $param->strA."\n".$param->strB."\n";
    print_r($g);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
}
