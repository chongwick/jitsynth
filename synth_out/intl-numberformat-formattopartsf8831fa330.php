<?php
if (true) {
    function f_0() {
        return "Class A object";
    }
    $empty_webp = __DIR__ . "/gh13774.webp";
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data1'] = 100;
    $db = MySQLPDOTest::factory();
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $b = 1;
    $i= DateInterval::createFromDateString('2 days');
    $needle = base64_decode('44CC');
    $ret = new stdClass;
    $array = array("test" => 1);
    $i = 1;
    $c = $i < 2;
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
    function f_1() {
        $ar1 = array(1, 2);
        class P {
            protected function common() {
                throw new Exception('Unreachable');
            }
        }
        class A extends P {
            public function test(P $sibling) {
                $sibling->common();
            }
        }
        class C extends P {
            use T;
        }
        $a = new A();
        $a->test(new C());
        $b = 1;
        phpinfo(INFO_VARIABLES);
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            printf("printf test 21:%016b\n", 170);
            $sh = new SessionHandler;
            $sh->open('path', 'name');
        }
    }
    $fn = function() { return static::name(); };
    $depth1 = "depth1";
    catch (\Error $e) {
        var_dump($e);
    }
    var_dump($e);
    $i=0;
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $logOnEvent = new LogOnEvent(34567, $timestamp);
    class LogOnEvent {
      public $audienceMemberId;
      public $timestamp;
    
      function __construct($audienceMemberId, $timestamp) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
      }
    }
    function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
        $this->version = $version;
        $this->activityId = $activityId;
        $this->messageId = $messageId;
        $this->source = $source;
        $this->logOnEvent = $logOnEvent;
        $this->logOffEvent = $logOffEvent;
      }
    $this->activityId = $activityId;
    $code = null;
    $err = null;
    var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
    $halves[0] = $halves[1] = 0;
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    class bug8318 extends \SplFileObject
    {
        public function __construct()
        {
        }
    
        public function fpassthru(): int
        {
            return 0;
        }
    }
    $cl = new bug8318;
    $cl->fpassthru();
    $db = getDbConnection();
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
    var_dump($x);
    $db = getDbConnection();
    $res = [];
    $res[] = $re;
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
    $loop_counter = 1;
    $g = 1;
    $inputs = array(
          'The ISO 8601:1988 week number' => "%V",
          'Weekday as decimal' => "%u",
    );
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    $foo->bar[] = 'bar';
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    $users = MailBox::USERS;
    $to = $users[0];
    $bcc = $users[2];
    foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
        $mailBox = MailBox::login($mailAddress);
        $mail = $mailBox->getMailsBySubject($subject);
        $mailBox->logout();
    
        if ($mail->isAsExpected($from, $to, $subject, $message)) {
            echo "Found the email. {$recipient} received.\n";
        }
    
        if ($mail->getHeader('X-Mailer') === $xMailer) {
            echo "The specified x-Mailer exists.\n\n";
        }
    }
    $mailBox = MailBox::login($mailAddress);
    $mailBox->logout();
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $it->next();
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    foreach ($offsets as $offset) {
        $dimension = &$offset;
        $container = false;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $dimension = &$offset;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $failures[] = $error;
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $bar = (int)$foo;
    $headers = ["Host: bad.com"];
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    zerofill(7, $link, 'BIGINT');
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $wsdl = __DIR__."/bug35142.wsdl";
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
    printf("printf test 18:%16b\n", 170);
    $host = PHP_CLI_SERVER_HOSTNAME;
    foreach ($offsets as $offset) {
        $dimension = &$offset;
        $container = false;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $dimension = &$offset;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    krsort($flags);
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
    var_dump($body->lookupNamespaceURI(""));
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    function foo(): never {
        if (false) {
            throw new Exception('bad');
        }
    }
    foo();
    $GLOBALS['a'] = "bug\n";
    $rounds = [
        'disp', // Correct.
        3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
        null, // No callback. Hopefully this clears everything.
        'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
    ];
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, true);
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $counter = 0;
    ob_start(function ($buffer) use (&$c, &$counter) {
            $c = 0;
            ++$counter;
    }, 1);
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    $prop->setRawValue($a, 1);
    $num = 100000;
    $a = Array();
    for ($i=0; $i<$num; $i++) {
      $a[$i] = Array(1);
    }
    $a[$i] = Array(1);
    for ($i=0; $i<$num; $i++) {
      $b[$i] = $a[$i][0];
    }
    $b[$i] = $a[$i][0];
    class C {
        public int $a;
    }
    $obj = new C();
    class A {
        static function name() { return 'A'; }
        function foo() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        function bar() {
            $fn = static function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        static function baz() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
    }
    class B extends A {
        static function name() { return 'B'; }
    }
    (new B)->bar();
    set_include_path(__DIR__.'/bug39542;.');
    var_dump((new Exception)->getTrace());
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
}
