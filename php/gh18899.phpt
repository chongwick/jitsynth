<?php
function ptr2str()
{
    for ($i=0; $i<8; $i++) {
        $ptr >>= 8;
    }
}
str_repeat("A",232).ptr2str();
?>
--EXPECTF--
Warning: Undefined variable $ptr in %s on line %d
