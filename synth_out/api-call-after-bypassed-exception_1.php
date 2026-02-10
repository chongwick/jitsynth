<?php
function f_0() {
    try {
        echo "\n-- Iteration $count --\n";
    } catch (Exception $e) {}
    if (true) {
        return 0;
    }
}
var_dump(session_cache_limiter());
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
