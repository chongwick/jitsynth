<?php
$fp = tmpfile();
fwrite($fp, "I am the LOB data");
function f_0() {
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
}
function f_1() {
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    $r->extractTo(__DIR__, NULL, TRUE);
}
if (true) {
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
    $test=array();
    $test[]=$test2;
    $this->callInitiator = "IVR";
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        session_write_close();
    }
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
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
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_int());
}
