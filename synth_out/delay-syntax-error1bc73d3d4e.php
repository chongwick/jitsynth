<?php
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
var_dump($rit->key());
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
$gen = gen();
$b = bar($gen);
$b->rewind();
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
var_dump($temp_array);
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
