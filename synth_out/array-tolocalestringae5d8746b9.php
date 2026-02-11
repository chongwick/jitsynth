<?php
ini_set("intl.error_level", E_WARNING);
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
set_include_path(__DIR__.'/bug39542:.');
