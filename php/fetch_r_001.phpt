<?php
$x = [&$v];
$y = 'x';
$$y == [&$x[0]];
?>
DONE
