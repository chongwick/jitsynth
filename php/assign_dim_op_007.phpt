<?php
class test {
    public$member;
    function __construct(){
        $this->member = 9223372036854775807;
        $this->member += 1;
    }
}
new test();
?>
DONE
