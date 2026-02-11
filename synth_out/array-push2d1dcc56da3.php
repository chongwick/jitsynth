<?php
function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
function callback(&$a, &$b, $c) {
        $b = 1;
    }
$a = 1;
$b = 1;
$a = $b = $c = 0;
var_dump( range(1.0, 7.0, 6.5) );
$references = array();
$idx = 0;
$rows = array();
for ($i = 0; $i < 2; $i++) {
        $rows[$i] = mysqli_fetch_assoc($res);
        $references[$idx]['row_ref'] 		= &$rows[$i];
        $references[$idx]['row_copy'] 	= $rows[$i];
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $references[$idx]['id_copy']		= $rows[$i]['id'];
        /* enforce separation */
        $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    }
$rows[$i] = mysqli_fetch_assoc($res);
$references[$idx]['row_copy'] 	= $rows[$i];
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
gc_collect_cycles();
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
var_dump(__METHOD__);
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
$result = get_declared_classes();
var_dump(array_search('foo', $result));
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
