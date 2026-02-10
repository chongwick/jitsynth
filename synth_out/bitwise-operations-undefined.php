<?php
function f_0() {
    $this->show();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $a = bar($gen);
    $a->next();
    function test(array... $args) {
        var_dump($args);
    }
    test();
    class A
    {
        public function & __get($name)
        {
            return $this->test;
        }
    }
    class B extends A
    {
        private $test;
    }
    $b = new B;
    var_dump($b->test);
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $stmt->execute();
}
function f_1() {
    printf("printf test 18:%16b\n", 170);
    $file_handle = fopen(__FILE__, "r");
    $values = array (
      /* integers */
      0,  // zero as argument
      000000123,  //octal value of 83
      123000000,
      -00000123,  //octal value of 83
      -12300000,
      0xffffff,  //hexadecimal value
      123456789,
      1,
      -1,
    
      /* floats */
      -0.0,
      +0.0,
      1.234,
      -1.234,
      -2.000000,
      2.0000000,
      -4.0001e+5,
      4.0001E+5,
      6.99999989,
      -.5,
      .567,
      -.6700000e-3,
      -.6700000E+3,
      1E-5,
      -1e+5,
      1e+5,
      1E-5,
    
      /* strings */
      "",
      '',
      " ",
      ' ',
      "0",
      "\0",
      '\0',
      "\t",
      '\t',
      "PHP",
      'PHP',
      "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
    
      /* boolean */
      TRUE,
      FALSE,
      true,
      false,
    
      /* arrays */
      array(),
      array(NULL),
      array(true),
      array(""),
      array(''),
      array(array(1, 2), array('a', 'b')),
      array("test" => "is_array", 1 => 'One'),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test'),
    
      /* resources */
      $file_handle
    );
    foreach( $values as $value ) {
      echo "-- Iteration $counter --\n";
      debug_zval_dump( $value );
      $counter++;
    }
    debug_zval_dump( $value );
    class A
    {
        public function & __get($name)
        {
            return $this->test;
        }
    }
    class B extends A
    {
        private $test;
    }
    $b = new B;
    var_dump($b->test);
    restore_exception_handler();
    var_dump(soundex("Knuth")       == soundex("Kant"));
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $result->close();
}
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
printf("printf test 1:%s\n", "simple string");
