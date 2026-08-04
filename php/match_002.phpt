<?php
class C {
}
function foo(C $i) {
    return match($i) {
    	1,2=>0,
    	default=>42
    };
};
var_dump(foo(new C));
?>
