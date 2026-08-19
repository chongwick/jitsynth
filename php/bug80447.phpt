<?php
function createTree($depth) {
    if (!$depth) {
        return [null, null];
    }
    $depth--;

    return [
        createTree($depth),
        createTree($depth)
    ];
}

function checkTree($treeNode) {
    return 1
        + ($treeNode[0][0] === null ? 1 : checkTree($treeNode[0]))
        + ($treeNode[1][0] === null ? 1 : checkTree($treeNode[1]));
}

$tree = createTree(12);
var_dump(checkTree($tree));
?>
