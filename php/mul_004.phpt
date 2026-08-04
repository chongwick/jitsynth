<?php

function mul2_8(int $a) {
  $res = $a * 8;  // shift cnt: 3
  var_dump($res);
}

function mul1_16(int $a) {
  $res = 16 * $a; // shift cnt: 4
  var_dump($res);
}

function mul2_big_int32(int $a) {
  $res = $a * 0x10000000; // shift cnt: 29
  var_dump($res);
}

function mul2_big_int64(int $a) {
  $res = $a * 0x100000000; // shift cnt: 32
  var_dump($res);
}

function mul2(int $a) {
  $res = $a * 2; // $a + $a
  var_dump($res);
}

mul2_8(3);
mul2_8(-11);
mul2_8(0x7fffffffffffffff);
mul1_16(3);
mul1_16(-13);
mul1_16(0x7fffffffffffffff);
mul2_big_int32(3);
mul2_big_int32(-3);
mul2_big_int32(0x10000000000);
mul2_big_int64(3);
mul2_big_int64(-3);
mul2_big_int64(0x100000000);
mul2(10);
mul2(0x7fffffffffffffff);
?>
