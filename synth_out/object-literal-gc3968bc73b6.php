<?php
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
function t3()
{
    ob_start("test");
        echo "Hello from t3 1 ";
        ob_clean();
        echo "Hello from t3 2 ";
        ob_end_flush();
}
function gen() { yield; }
function f_0() {
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $after = memory_get_usage();
        }
        $a = 2;
    }
    $s = "X";
    var_dump( range(1, 7, fdiv(0, 0)) );
    $counter = 1;
    $counter++;
    t3();
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $initialRequest = false;
        $y = 0;
        global $y;
        $y++;
        var_dump($initialRequest ? $x : $y);
    }
}
$gen = gen();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
}
