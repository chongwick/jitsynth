<?php
function test($char_code) {
    if ($char_code == !($char_code & 0xffffff80)) {
        return "correct";
    } else {
        return "wrong";
    }
}
echo test(65), "\n";
?>
