<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $this->callInitiator = "IVR";
    function f_1() {
    }
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    function f_2() {
        $rounds = [
            'disp', // Correct.
            3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
            null, // No callback. Hopefully this clears everything.
            'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
        ];
    }
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = "-c";
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $b = bar($gen);
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $outfile = tempnam(sys_get_temp_dir(), "ssl");
        $contentfile = tempnam(sys_get_temp_dir(), "ssl");
        $eml = __DIR__ . "/signed.eml";
        $cainfo = array();
        var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
    }
}
