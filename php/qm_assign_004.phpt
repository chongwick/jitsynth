<?php

function getPropertyScopes($props, $flags): array
{
    $propertyScopes = [];
    foreach ($props as $prop) {
        $tmp = 'x'.$flags;
        $propertyScopes[] = $propertyScopes[] = ($flags & 1 ? false : null) . '';
    }

    return $propertyScopes;
}

var_dump(getPropertyScopes(['a'], 0));
var_dump(getPropertyScopes(['a'], 0));
?>
DONE
