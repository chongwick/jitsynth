<?php
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function genResponses($server) {
    $uri = 'http://' . stream_socket_get_name($server, false);
    yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
    $xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
    // Missing content-type in actual response.
    yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
}
function f_0() {
    $gen = gen();
    $b = bar($gen);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
        $needle = array(
          //regular strings
          'l',
          'L',
          'HELLO',
          'hEllo',
        
          //escape characters
          '\t',
          '\T',
          '     ',
          '\n',
          '\N',
          '
        ',  //new line
        
          //nulls
          '\0',
        
          //boolean false
          FALSE,
          false,
        
          //empty string
          '',
        
          //special chars
          ' ',
          '$',
          ' $',
          '&',
          '!#',
          '%\o',
          '\o,',
          '()',
          '*+',
          '+',
          '-',
          '.',
          '.;',
          ':;',
          ';',
          '<=>',
          '>',
          '=>',
          '?',
          '@',
          '@hEllo',
        
          '12345', //decimal numeric string
          '\x23',  //hexadecimal numeric string
          '#',  //hexadecimal numeric string
          '\101',  //octal numeric string
          'A',
          '456HEE',  //numerics + chars
          42, //needle as int(ASCII value of '*')
          $haystack  //haystack as needle
        );
    }
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    return 0;
}
$after = memory_get_usage();
$uri = 'http://' . stream_socket_get_name($server, false);
