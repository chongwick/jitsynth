<?php
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
function f_0() {
    return "Object1";
}
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
$ch = curl_init("https://localhost/username");
function f_1() {
    if (true) {
        return [];
    }
    if (true) {
        return '';
    }
    $db = PDOTest::factory();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    set_error_handler("customErrorHandler");
}
$res = [];
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $im = ImageCreateTrueColor(10, 10);
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    if (true) {
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, "SELECT * FROM bug80147");
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
    }
}
$arr  = array("test");
list($c,$d) = is_array($arr)?: NULL;
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
byReference($array);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
