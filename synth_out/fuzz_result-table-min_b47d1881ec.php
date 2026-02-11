<?php
$code = <<<'PHP'
/* Receive */
$content = trim(file_get_contents("php://input")) . PHP_EOL;
PHP;
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
$key = str_repeat('abc', random_int(3, 3));
$db = PDOTest::factory();
$res = $db->query("SELECT a FROM test36428");
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with object, unset variable and resource variable
       array(@$unset_var => "hello", $fp => 'resource'),

       // array with mixed keys
/*11*/ array('hello' => 1, "fruit" => 2.2,
             $fp => 'resource', 133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
function f_0() {
    public static function fromArray(array $props): self
        {
            $me = new static;
            foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
            return $me;
        }
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $parser = xml_parser_create();
            public function __construct($callback) {
                    $this->callback = $callback;
                }
            $this->callback = $callback;
            $quote_char_string = <<<EOT
            <html>&lt; This's a string with quotes:
            "strings in double quote" &amp;
            'strings in single quote' &quot;
            this\line is &#039;single quoted&#039; /with\slashes </html>
            EOT;
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
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
            var_dump($namespaceless->lookupNamespaceURI("a"));
            function gen() {
                yield 0;
                yield from gen();
            }
            function bar($gen) {
                yield from $gen;
            }
            $gen = gen();
            $a = bar($gen);
            $a->rewind();
        }
    }
    $index_array = array (1, 2, 3);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $list = new SplDoublyLinkedList();
            $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
        }
    }
}
$text = 'This is an ‘example’ of using DOM splitText';
$st
rt = 30;
$le
gth = 3;

$d
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
ched = $node->splitText($start);
$ma
ched->splitText($length);
pri;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
