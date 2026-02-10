<?php
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
function f_0() {
}
$fi = new finfo(FILEINFO_MIME_TYPE);
