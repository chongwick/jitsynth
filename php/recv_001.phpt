<?php

function test(array $args, $short_options, $long_options = null)
{
    echo "okey";
}

test(array(), "d:e", 222, 3434);

?>
