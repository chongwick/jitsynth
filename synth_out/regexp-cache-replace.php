<?php
$a = new DateTime("2009-01-01", null);
ob_end_clean();
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
function test(int $nr) {
    for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
}
test(1);
var_dump(soundex("Lloyd"));
var_dump(session_cache_limiter());
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
