<?php
class Node {
    public $previous;
    public $next;
}

function xxx() {
    $firstNode = new Node();
//    $firstNode->previous = $firstNode;
    $firstNode->next = $firstNode;
    $circularDoublyLinkedList = null;
    for ($i = 0; $i < 2; $i++) {
        $currentNode = $circularDoublyLinkedList;
        $nextNode = $circularDoublyLinkedList->next;
        $newNode->next = $undef1->next; // <- ???
        $newNode = new Node();
        $currentNode->undef2 = new Node();
        $circularDoublyLinkedList = $nextNode;
    }
}

try {
	@xxx();
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
?>
