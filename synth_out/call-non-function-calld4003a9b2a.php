<?php
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
try {
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
} catch (Exception $e) {}
if (true) {
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['nanana'] = 'batman';
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
}
set_error_handler("customErrorHandler");
