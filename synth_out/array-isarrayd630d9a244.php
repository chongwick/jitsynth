<?php
function test(array... $args) {
    var_dump($args);
}
var_dump(error_reporting());
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_binmode($res, ODBC_BINMODE_RETURN);
printf("printf test 16:%x\n", 170);
test();
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
session_start();
$empty_string = <<<EOT
EOT;
$blank_line = <<<EOT

EOT;
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
$res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
for($index =0; $index < count($res_heredoc_strings); $index ++) {
  echo "-- Iteration $count --\n";
  var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
  $count++;
}
var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
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
var_dump( gmdate($value, $timestamp) );
