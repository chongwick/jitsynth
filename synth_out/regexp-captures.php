<?php
$db = PDOTest::factory();
$res = $db->query("SELECT a FROM test36428");
$output = array();
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
