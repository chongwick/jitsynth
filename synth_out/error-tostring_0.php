<?php
$heredoc = <<<EOT
key
EOT;
fwrite($fp, "test");
$res = $stmt->fetchAll();
$r2 = $r['testtable'];
$c = "assert";
$ar2 = array(1, 2);
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$date2 = new DateTime("Fri 19 November 2011");
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$ar = array_values($array);
$references = array();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$i = 1;
$heredoc = <<<EOT
hello world
EOT;
$subject = 'mail_bug80706';
print_r($client->GetExpressCheckoutDetails());
function f_0() {
    $c = new C();
    $object1 = new foo();
    $resources = array($file_handle, $dir_handle);
    return "Class A object";
}
$t->test();
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
$tester->expectLogNotice($userMessage, 'cccc');
ini_set('session.serialize_handler', 'php_serialize');
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$it->next();
test(3);
var_dump(sprintf("%%", 1.23456789e10));
$c = new C();
var_dump($pdo->query('SELECT 1;')->fetchAll());
