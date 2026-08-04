<?php

$simple = new SimpleXMLElement("<root><a/><b/></root>");

function run_loop($firstTerms, $closure) {
    foreach ($firstTerms as $firstTerm) {
        \debug_zval_dump($firstTerm);
        $closure($firstTerm, "10");
    }
}

run_loop($simple, bcadd(...));
echo "Done\n";

?>
--EXPECTF--
object(SimpleXMLElement)#%d (0) refcount(3){
}
object(SimpleXMLElement)#%d (0) refcount(3){
}
Done
