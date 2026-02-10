<?php
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
}
$object = new StdClass();
$a = NULL;
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
);
    var_dump($d == get_base;
var_dump($a["10"], isset($a["10"]));
$m = $r->getStaticProperties();
var_dump($r);
fclose($fp);
var_dump($baz);
var_dump(array_column($array, 'superhero'));
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$mysqli->query($sql);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $it = new RecursiveIteratorIterator($iterator);
    var_dump(nl2br($str) );
    var_dump(1);
    zerofill(8, $link, 'FLOAT');
    foo();
}
$pass = "qwerty";
$interval = new DateInterval('P1D');
$foo = new Foo();
var_dump(is_callable(array($this, 'static::testIsCallable2')));
$insert->execute();
_set_lc_messages($dbh);
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
display($res);
var_dump($options['dummy']['foo']);
$EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
$org_a = $GLOBALS['a'];
$link->real_query($sql);
var_dump(array_column($array, 'superhero'));
var_dump($rm->getNumberOfRequiredParameters());
