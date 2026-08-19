<?php
echo match (random_int(1, 2)) {
    1, 2 => 'foo',
};
?>
