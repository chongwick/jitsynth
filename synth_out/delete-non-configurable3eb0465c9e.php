<?php
function boo(){
    debug_print_backtrace();
}
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$fp = fopen('php://input', 'r+');
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $empty = "";
    var_dump(openssl_pkcs7_verify($empty, 0));
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    boo();
    extract(Foo::bar());
}
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$blank_line = <<<EOT

EOT;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $object = new StdClass();
    catch (Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump(range('z', 'a', 100));
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    printf("printf test 9:<%-20s>\n", "bar");
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
}
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
date_default_timezone_set('UTC');
$me = new static;
$header = <<<HEADER
enum bug_gh16013_enum {
	BUG_GH16013_A = 1,
	BUG_GH16013_B = 2,
};
struct bug_gh16013_int_struct {
	int field;
};
struct bug_gh16013_callback_struct {
	int8_t (*return_int8)(int8_t);
	uint8_t (*return_uint8)(uint8_t);
	int16_t (*return_int16)(int16_t);
	uint16_t (*return_uint16)(uint16_t);
	int32_t (*return_int32)(int32_t);
	uint32_t (*return_uint32)(uint32_t);
	float (*return_float)(float);
	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
};

char bug_gh16013_return_char();
bool bug_gh16013_return_bool();
short bug_gh16013_return_short();
int bug_gh16013_return_int();
enum bug_gh16013_enum bug_gh16013_return_enum();
struct bug_gh16013_int_struct bug_gh16013_return_struct();
HEADER;
$loop_counter = 1;
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
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
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmdate($value, $timestamp) );
      var_dump( gmdate($value) );
}
var_dump( gmdate($value) );
printf("printf test 4:%.10f\n", 10.0/3);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
php_cli_server_start('foo bar');
