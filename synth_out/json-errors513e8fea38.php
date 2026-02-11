<?php
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
class C {
    public int $a;
}
function f_0() {
    try {
        $datatypes = array(
                MYSQLI_TYPE_TINY => "TINY",
                MYSQLI_TYPE_SHORT => "SHORT",
                MYSQLI_TYPE_LONG => "LONG",
                MYSQLI_TYPE_FLOAT => "FLOAT",
                MYSQLI_TYPE_DOUBLE => "DOUBLE",
                MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
                MYSQLI_TYPE_LONGLONG => "LONGLONG",
                MYSQLI_TYPE_INT24 => "INT24",
                MYSQLI_TYPE_DATE => "DATE",
                MYSQLI_TYPE_TIME => "TIME",
                MYSQLI_TYPE_DATETIME => "DATETIME",
                MYSQLI_TYPE_YEAR => "YEAR",
                MYSQLI_TYPE_ENUM => "ENUM",
                MYSQLI_TYPE_SET	=> "SET",
                MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
                MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
                MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
                MYSQLI_TYPE_BLOB => "BLOB",
                MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
                MYSQLI_TYPE_STRING => "STRING",
                MYSQLI_TYPE_NULL => "NULL",
                MYSQLI_TYPE_NEWDATE => "NEWDATE",
                MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
            );
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("html"));
    } catch (Exception $e) {}
    if (true) {
        $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
        $stmt = $mysql->prepare("SELECT id FROM temp");
        $stmt->bind_result($id);
    }
}
$assoc_array = array ('one' => 1, 'two' => 2);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI("xml"));
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$mutable = \DateTime::createFromImmutable($immutable);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
var_dump($namespaceless->lookupNamespaceURI(NULL));
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
var_dump(getopt("abcd"));
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
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$b = new B;
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$text = '<p>hello world &trade;</p>';
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$pass = "qwerty";
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->bind_result($id);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
$row = pg_fetch_row($res, 0);
$sh = new SessionHandler;
$sh->open('path', 'name');
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
printf("printf test 13:%5d\n", -12);
$url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
$tests = array(
    1 => array(
        '$6$saltstring',
        'Hello world!',
        '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
    ),
    2 => array(
        '$6$rounds=10000$saltstringsaltstring',
        'Hello world!',
        '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
    ),
    3 => array(
        '$6$rounds=5000$toolongsaltstring',
        'This is just a test',
        '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
    ),
    4 => array(
        '$6$rounds=1400$anotherlongsaltstring',
        'a very much longer text to encrypt.  This one even stretches over morethan one line.',
        '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
    ),
    5 => array(
        '$6$rounds=77777$short',
        'we have a short salt string but not a short password',
        '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
    ),
    6 => array(
        '$6$rounds=123456$asaltof16chars..',
        'a short string',
        '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
    ),
    7 => array(
        '$6$$bar$',
        'foo',
        '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
    ),
    8 => array(
        '$6$rounds=10$roundstoolow',
        'the number of rounds is too low',
        '*0'
    ),
    8 => array(
        '$6$rounds=1000000000$roundstoohigh',
        'the number of rounds is too high',
        '*0'
    ),
);
list($value) = yield;
var_dump($value);
$ninety = M_PI /2.0;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$heredoc_needle = <<<EOD
^^&*(
EOD;
$needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
var_dump(substr_compare('/', '/asd', 0, 4));
