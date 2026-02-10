<?php
function f_0() {
    $array_object = array();
    function f_1() {
        $ch = curl_init("https://localhost/userpwd");
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        public static function fromArray(array $props): self
            {
                $me = new static;
                foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
                return $me;
            }
        $me = new static;
        foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
        $me->{$k} = &$v;
        return $me;
    }
    ob_end_flush();
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->start();
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    static function comp_func_cr2($a, $b) {
            echo ".";
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member < $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
$b->aa();
