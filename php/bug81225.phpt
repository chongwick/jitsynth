<?php

function unsignedLong(int $offset): int
{
    $normalizedOffset = $offset % (2 ** 32);

    if ($normalizedOffset < 0) {
        $normalizedOffset += 2 ** 32;
    }

    return $normalizedOffset;
}

$offset = -0x100000000 + 2;

for ($i = 0; $i < 200; ++$i) {
    assert(unsignedLong($offset) === 2);
}
?>
OK
