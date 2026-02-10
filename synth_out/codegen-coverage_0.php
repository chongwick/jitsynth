<?php
function f_0() {
    return [0, $a];
}
function f_1() {
    $dyadic = 0.00000000000045474735088646411895751953125;
    $box->value = null;
}
function f_2() {
    $headers = ["Host: bad.com"];
    $max = 0x66666666;
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    $immutable = \DateTimeImmutable::createFromInterface($mutable);
    $valid_objects = array(
  new stdclass,
  new foo,
  new concreteClass,
  new Value,
  new myClass,
  $myClass_object,
  $myClass_object->foo_object,
  $myClass_object->public_var1,
  $foo_object,
  $Value_object,
  $concreteClass_object
);
    $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
    while (true) {
        break;  // avoid infinite loop
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
        $i = 0;
        $b = bar($gen);
        $temp_array = $array;
        $reflector = new ReflectionClass(C::class);
        $container->appendChild(createElementNS($dom, NULL, "html", "3"));
        $child = new ChildClass();
        $id_2_date = '2014-09-24';
        $reflector = new ReflectionClass(C::class);
        $_ = str_repeat("A", 512);
        $date1 = new DateTime("Tuesday");
        $bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
        $a = new A();
        $priorityQueue = new SplPriorityQueue();
        $fi = new finfo(FILEINFO_MIME_TYPE);
        $code = null;
        $date = new DateTime("2011-05-17T22:14:12");
        $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
        $h = gzopen($f, 'r');
        ini_set("intl.error_level", E_WARNING);
        $me->{$k} = &$v;
        $d = new D();
        $zip = new ZipArchive();
        $ch = curl_init();
        $meta = $meta[0];
        $readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
        $db = PDOTest::factory();
        var_dump(preg_replace_callback_array([], []));
        $j = 0;
        $callback1 = [$o, 'trampoline1'];
        $a = new A();
        $_SERVER = [ 'test' => 'test' ];
        $info = opcache_get_status()['interned_strings_usage'];
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
        $container->appendChild(createElement($dom, "HTML", "1"));
        $inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
        $this->a = new Canary();
        $varOutput = ob_get_contents();
        $reflector = new ReflectionClass(C::class);
        $iterator = 1;
        $GLOBALS["obj"] = 24;
        var_dump(file_get_contents($pkcsfile));
        $create = sprintf('%s)', substr($create, 0, -2));
        $a->prop = new B();
        $dest = __DIR__ . "/bug40228";
        $GLOBALS["obj"] = 24;
        $cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3

EOT;
        $I = new di('P10D');
        imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
        $bar = new DateTime();
        $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
        $DB = new DB();
        $fp = fopen(__DIR__."/test2.csv", "r");
        $instance = new Foo();
        $timestamp = mktime(8, 8, 8, 8, 8, 2008);
        var_dump( end($array_test) );
        $bcc = $users[2];
        $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
        $mem0 = $mem;
        $concreteClass_object = new concreteClass();
        $array = array('f' => "first", "s" => 'second', 1, 2.222);
        $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $this->mysqli->close();
        $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
    $cdata = $ffi->new('enum bug_gh16013_enum');
    $cdata->cdata = $val;
    return $cdata;
};
        $a = 'ok';
        $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
        $this->show();
        $b->aa();
        $arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
    }
}
$mysqli->query($sql);
