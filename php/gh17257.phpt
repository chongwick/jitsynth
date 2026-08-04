<?php
function get_const() {
}
function test() {
    call_user_func('get_const', 1); // need an extra arg to trigger the issue
}
function main(){
    for ($i = 0; $i < 10; $i++) {
        test();
    }
    echo "Done\n";
}
main();
?>
