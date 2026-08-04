<?php
function foo($type) {
        $key = md5(
            is_array($type) ? \implode('_', $type) : $type .
            "ops"
        );
        return $key;
}
var_dump(foo("int"));
var_dump(foo(["int"]));
?>
