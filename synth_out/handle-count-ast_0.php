<?php
$array = [0];
$attr = $root->attributes('urn:x');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $func_argvs = [
    [ 'bug_gh9090_void_none',         [ ]                           ],
    [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
    [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
];
}
