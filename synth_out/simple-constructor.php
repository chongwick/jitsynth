<?php
function f_0() {
    $counter = 1;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump(session_cache_limiter());
    }
    function Test($param) {
        global $g;
        $g = $param->strA."\n".$param->strB."\n";
        return $g;
    }
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
function f_2() {
    $field = mysqli_fetch_field_direct($res, 1);
}
function f_3() {
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
}
function f_4() {
    $reflector = new ReflectionClass(C::class);
    $ch = curl_init();
    $host = curl_cli_server_start();
}
function f_5() {
    $certificateGenerator = new CertificateGenerator();
    $ftp = ftp_connect('127.0.0.1', $port);
    if (true) {
        function lookup($s){
               return match($s){
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20,
                21 => 21,
                22 => 22,
                23 => 23,
                24 => 24,
                25 => 25,
                26 => 26,
                27 => 27,
                28 => 28,
                29 => 29,
                30 => 30,
                31 => 31,
                32 => 32,
                33 => 33,
                34 => 34,
                35 => 35,
                36 => 36,
                37 => 37,
                38 => 38,
                39 => 39,
                40 => 40,
                41 => 41,
                42 => 42,
                43 => 43,
                44 => 44,
                45 => 45,
                46 => 46,
                47 => 47,
                48 => 48,
                49 => 49,
                50 => 50,
                51 => 51,
                52 => 52,
                53 => 53,
                54 => 54,
                55 => 55,
                56 => 56,
                57 => 57,
                58 => 58,
                59 => 59,
                60 => 60,
                61 => 61,
                62 => 62,
                63 => 63,
                64 => 64,
                65 => 65,
                66 => 66,
                67 => 67,
                68 => 68,
                69 => 69,
                70 => 70,
                71 => 71,
                72 => 72,
                73 => 73,
                74 => 74,
                75 => 75,
                76 => 76,
                77 => 77,
                78 => 78,
                79 => 79,
                80 => 80,
                81 => 81,
                82 => 82,
                83 => 83,
                84 => 84,
                85 => 85,
                86 => 86,
                87 => 87,
                88 => 88,
                89 => 89,
                90 => 90,
                91 => 91,
                92 => 92,
                93 => 93,
                94 => 94,
                95 => 95,
                96 => 96,
                97 => 97,
                98 => 98,
                99 => 99,
                100 => 100,
                101 => 101,
                102 => 102,
                103 => 103,
                104 => 104,
                105 => 105,
                106 => 106,
                107 => 107,
                108 => 108,
                109 => 109,
                110 => 110,
                111 => 111,
                112 => 112,
                113 => 113,
                114 => 114,
                115 => 115,
                116 => 116,
                117 => 117,
                118 => 118,
                119 => 119,
                120 => 120,
                121 => 121,
                122 => 122,
                123 => 123,
                124 => 124,
                125 => 125,
                126 => 126,
                127 => 127,
                128 => 128,
                129 => 129,
                130 => 130,
                131 => 131,
                132 => 132,
                133 => 133,
                134 => 134,
                135 => 135,
                136 => 136,
                137 => 137,
                138 => 138,
                139 => 139,
                140 => 140,
                141 => 141,
                142 => 142,
                143 => 143,
                144 => 144,
                145 => 145,
                146 => 146,
                147 => 147,
                148 => 148,
                149 => 149,
                150 => 150,
                151 => 151,
                152 => 152,
                153 => 153,
                154 => 154,
                155 => 155,
                156 => 156,
                157 => 157,
                158 => 158,
                159 => 159,
                160 => 160,
                161 => 161,
                162 => 162,
                163 => 163,
                164 => 164,
                165 => 165,
                166 => 166,
                167 => 167,
                168 => 168,
                169 => 169,
                170 => 170,
                171 => 171,
                172 => 172,
                173 => 173,
                174 => 174,
                175 => 175,
                176 => 176,
                177 => 177,
                178 => 178,
                179 => 179,
                180 => 180,
                181 => 181,
                182 => 182,
                183 => 183,
                184 => 184,
                185 => 185,
                186 => 186,
                187 => 187,
                188 => 188,
                189 => 189,
                190 => 190,
                191 => 191,
                192 => 192,
                193 => 193,
                194 => 194,
                195 => 195,
                196 => 196,
                197 => 197,
                198 => 198,
                199 => 199,
                200 => 200,
                201 => 201,
                202 => 202,
                203 => 203,
                204 => 204,
                205 => 205,
                206 => 206,
                207 => 207,
                208 => 208,
                209 => 209,
                210 => 210,
                211 => 211,
                212 => 212,
                213 => 213,
                214 => 214,
                215 => 215,
                216 => 216,
                217 => 217,
                218 => 218,
                219 => 219,
                220 => 220,
                221 => 221,
                222 => 222,
                223 => 223,
                224 => 224,
                225 => 225,
                226 => 226,
                227 => 227,
                228 => 228,
                229 => 229,
                230 => 230,
                231 => 231,
                232 => 232,
                233 => 233,
                234 => 234,
                235 => 235,
                236 => 236,
                237 => 237,
                238 => 238,
                239 => 239,
                240 => 240,
                241 => 241,
                242 => 242,
                243 => 243,
                244 => 244,
                245 => 245,
                246 => 246,
                247 => 247,
                248 => 248,
                249 => 249,
                250 => 250,
                251 => 251,
                252 => 252,
                253 => 253,
                254 => 254,
                255 => 255,
                256 => 256,
                257 => 257,
                258 => 258,
                259 => 259,
                260 => 260,
                261 => 261,
                262 => 262,
                263 => 263,
                264 => 264,
                265 => 265,
                266 => 266,
                267 => 267,
                268 => 268,
                269 => 269,
                270 => 270,
                271 => 271,
                272 => 272,
                273 => 273,
                274 => 274,
                275 => 275,
                276 => 276,
                277 => 277,
                278 => 278,
                279 => 279,
                280 => 280,
                281 => 281,
                282 => 282,
                283 => 283,
                284 => 284,
                285 => 285,
                286 => 286,
                287 => 287,
                288 => 288,
                289 => 289,
                290 => 290,
                291 => 291,
                292 => 292,
                293 => 293,
                294 => 294,
                295 => 295,
                296 => 296,
                297 => 297,
                298 => 298,
                299 => 299,
                300 => 300,
                301 => 301,
                302 => 302,
                303 => 303,
                304 => 304,
                305 => 305,
                306 => 306,
                307 => 307,
                308 => 308,
                309 => 309,
                310 => 310,
                311 => 311,
                312 => 312,
                313 => 313,
                314 => 314,
                315 => 315,
                316 => 316,
                317 => 317,
                318 => 318,
                319 => 319,
                320 => 320,
                321 => 321,
                322 => 322,
                323 => 323,
                324 => 324,
                325 => 325,
                326 => 326,
                327 => 327,
                328 => 328,
                329 => 329,
                330 => 330,
                331 => 331,
                332 => 332,
                333 => 333,
                334 => 334,
                335 => 335,
                336 => 336,
                337 => 337,
                338 => 338,
                339 => 339,
                340 => 340,
                341 => 341,
                342 => 342,
                343 => 343,
                344 => 344,
                345 => 345,
                346 => 346,
                347 => 347,
                348 => 348,
                349 => 349,
                350 => 350,
                351 => 351,
                352 => 352,
                353 => 353,
                354 => 354,
                355 => 355,
                356 => 356,
                357 => 357,
                358 => 358,
                359 => 359,
                360 => 360,
                361 => 361,
                362 => 362,
                363 => 363,
                364 => 364,
                365 => 365,
                366 => 366,
                367 => 367,
                368 => 368,
                369 => 369,
                370 => 370,
                371 => 371,
                372 => 372,
                373 => 373,
                374 => 374,
                375 => 375,
                376 => 376,
                377 => 377,
                378 => 378,
                379 => 379,
                380 => 380,
                381 => 381,
                382 => 382,
                383 => 383,
                384 => 384,
                385 => 385,
                386 => 386,
                387 => 387,
                388 => 388,
                389 => 389,
                390 => 390,
                391 => 391,
                392 => 392,
                393 => 393,
                394 => 394,
                395 => 395,
                396 => 396,
                397 => 397,
                398 => 398,
                399 => 399,
                400 => 400,
                401 => 401,
                402 => 402,
                403 => 403,
                404 => 404,
                405 => 405,
                406 => 406,
                407 => 407,
                408 => 408,
                409 => 409,
                410 => 410,
                411 => 411,
                412 => 412,
                413 => 413,
                414 => 414,
                415 => 415,
                416 => 416,
                417 => 417,
                418 => 418,
                419 => 419,
                420 => 420,
                421 => 421,
                422 => 422,
                423 => 423,
                424 => 424,
                425 => 425,
                426 => 426,
                427 => 427,
                428 => 428,
                429 => 429,
                430 => 430,
                431 => 431,
                432 => 432,
                433 => 433,
                434 => 434,
                435 => 435,
                436 => 436,
                437 => 437,
                438 => 438,
                439 => 439,
                440 => 440,
                441 => 441,
                442 => 442,
                443 => 443,
                444 => 444,
                445 => 445,
                446 => 446,
                447 => 447,
                448 => 448,
                449 => 449,
                450 => 450,
                451 => 451,
                452 => 452,
                453 => 453,
                454 => 454,
                455 => 455,
                456 => 456,
                457 => 457,
                458 => 458,
                459 => 459,
                460 => 460,
                461 => 461,
                462 => 462,
                463 => 463,
                464 => 464,
                465 => 465,
                466 => 466,
                467 => 467,
                468 => 468,
                469 => 469,
                470 => 470,
                471 => 471,
                472 => 472,
                473 => 473,
                474 => 474,
                475 => 475,
                476 => 476,
                477 => 477,
                478 => 478,
                479 => 479,
                480 => 480,
                481 => 481,
                482 => 482,
                483 => 483,
                484 => 484,
                485 => 485,
                486 => 486,
                487 => 487,
                488 => 488,
                489 => 489,
                490 => 490,
                491 => 491,
                492 => 492,
                493 => 493,
                494 => 494,
                495 => 495,
                496 => 496,
                497 => 497,
                498 => 498,
                499 => 499,
                500 => 500,
                501 => 501,
                502 => 502,
                503 => 503,
                504 => 504,
                505 => 505,
                506 => 506,
                507 => 507,
                508 => 508,
                509 => 509,
                510 => 510,
                511 => 511,
                512 => 512,
                513 => 513,
            };
        }
        return match($s){
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20,
                21 => 21,
                22 => 22,
                23 => 23,
                24 => 24,
                25 => 25,
                26 => 26,
                27 => 27,
                28 => 28,
                29 => 29,
                30 => 30,
                31 => 31,
                32 => 32,
                33 => 33,
                34 => 34,
                35 => 35,
                36 => 36,
                37 => 37,
                38 => 38,
                39 => 39,
                40 => 40,
                41 => 41,
                42 => 42,
                43 => 43,
                44 => 44,
                45 => 45,
                46 => 46,
                47 => 47,
                48 => 48,
                49 => 49,
                50 => 50,
                51 => 51,
                52 => 52,
                53 => 53,
                54 => 54,
                55 => 55,
                56 => 56,
                57 => 57,
                58 => 58,
                59 => 59,
                60 => 60,
                61 => 61,
                62 => 62,
                63 => 63,
                64 => 64,
                65 => 65,
                66 => 66,
                67 => 67,
                68 => 68,
                69 => 69,
                70 => 70,
                71 => 71,
                72 => 72,
                73 => 73,
                74 => 74,
                75 => 75,
                76 => 76,
                77 => 77,
                78 => 78,
                79 => 79,
                80 => 80,
                81 => 81,
                82 => 82,
                83 => 83,
                84 => 84,
                85 => 85,
                86 => 86,
                87 => 87,
                88 => 88,
                89 => 89,
                90 => 90,
                91 => 91,
                92 => 92,
                93 => 93,
                94 => 94,
                95 => 95,
                96 => 96,
                97 => 97,
                98 => 98,
                99 => 99,
                100 => 100,
                101 => 101,
                102 => 102,
                103 => 103,
                104 => 104,
                105 => 105,
                106 => 106,
                107 => 107,
                108 => 108,
                109 => 109,
                110 => 110,
                111 => 111,
                112 => 112,
                113 => 113,
                114 => 114,
                115 => 115,
                116 => 116,
                117 => 117,
                118 => 118,
                119 => 119,
                120 => 120,
                121 => 121,
                122 => 122,
                123 => 123,
                124 => 124,
                125 => 125,
                126 => 126,
                127 => 127,
                128 => 128,
                129 => 129,
                130 => 130,
                131 => 131,
                132 => 132,
                133 => 133,
                134 => 134,
                135 => 135,
                136 => 136,
                137 => 137,
                138 => 138,
                139 => 139,
                140 => 140,
                141 => 141,
                142 => 142,
                143 => 143,
                144 => 144,
                145 => 145,
                146 => 146,
                147 => 147,
                148 => 148,
                149 => 149,
                150 => 150,
                151 => 151,
                152 => 152,
                153 => 153,
                154 => 154,
                155 => 155,
                156 => 156,
                157 => 157,
                158 => 158,
                159 => 159,
                160 => 160,
                161 => 161,
                162 => 162,
                163 => 163,
                164 => 164,
                165 => 165,
                166 => 166,
                167 => 167,
                168 => 168,
                169 => 169,
                170 => 170,
                171 => 171,
                172 => 172,
                173 => 173,
                174 => 174,
                175 => 175,
                176 => 176,
                177 => 177,
                178 => 178,
                179 => 179,
                180 => 180,
                181 => 181,
                182 => 182,
                183 => 183,
                184 => 184,
                185 => 185,
                186 => 186,
                187 => 187,
                188 => 188,
                189 => 189,
                190 => 190,
                191 => 191,
                192 => 192,
                193 => 193,
                194 => 194,
                195 => 195,
                196 => 196,
                197 => 197,
                198 => 198,
                199 => 199,
                200 => 200,
                201 => 201,
                202 => 202,
                203 => 203,
                204 => 204,
                205 => 205,
                206 => 206,
                207 => 207,
                208 => 208,
                209 => 209,
                210 => 210,
                211 => 211,
                212 => 212,
                213 => 213,
                214 => 214,
                215 => 215,
                216 => 216,
                217 => 217,
                218 => 218,
                219 => 219,
                220 => 220,
                221 => 221,
                222 => 222,
                223 => 223,
                224 => 224,
                225 => 225,
                226 => 226,
                227 => 227,
                228 => 228,
                229 => 229,
                230 => 230,
                231 => 231,
                232 => 232,
                233 => 233,
                234 => 234,
                235 => 235,
                236 => 236,
                237 => 237,
                238 => 238,
                239 => 239,
                240 => 240,
                241 => 241,
                242 => 242,
                243 => 243,
                244 => 244,
                245 => 245,
                246 => 246,
                247 => 247,
                248 => 248,
                249 => 249,
                250 => 250,
                251 => 251,
                252 => 252,
                253 => 253,
                254 => 254,
                255 => 255,
                256 => 256,
                257 => 257,
                258 => 258,
                259 => 259,
                260 => 260,
                261 => 261,
                262 => 262,
                263 => 263,
                264 => 264,
                265 => 265,
                266 => 266,
                267 => 267,
                268 => 268,
                269 => 269,
                270 => 270,
                271 => 271,
                272 => 272,
                273 => 273,
                274 => 274,
                275 => 275,
                276 => 276,
                277 => 277,
                278 => 278,
                279 => 279,
                280 => 280,
                281 => 281,
                282 => 282,
                283 => 283,
                284 => 284,
                285 => 285,
                286 => 286,
                287 => 287,
                288 => 288,
                289 => 289,
                290 => 290,
                291 => 291,
                292 => 292,
                293 => 293,
                294 => 294,
                295 => 295,
                296 => 296,
                297 => 297,
                298 => 298,
                299 => 299,
                300 => 300,
                301 => 301,
                302 => 302,
                303 => 303,
                304 => 304,
                305 => 305,
                306 => 306,
                307 => 307,
                308 => 308,
                309 => 309,
                310 => 310,
                311 => 311,
                312 => 312,
                313 => 313,
                314 => 314,
                315 => 315,
                316 => 316,
                317 => 317,
                318 => 318,
                319 => 319,
                320 => 320,
                321 => 321,
                322 => 322,
                323 => 323,
                324 => 324,
                325 => 325,
                326 => 326,
                327 => 327,
                328 => 328,
                329 => 329,
                330 => 330,
                331 => 331,
                332 => 332,
                333 => 333,
                334 => 334,
                335 => 335,
                336 => 336,
                337 => 337,
                338 => 338,
                339 => 339,
                340 => 340,
                341 => 341,
                342 => 342,
                343 => 343,
                344 => 344,
                345 => 345,
                346 => 346,
                347 => 347,
                348 => 348,
                349 => 349,
                350 => 350,
                351 => 351,
                352 => 352,
                353 => 353,
                354 => 354,
                355 => 355,
                356 => 356,
                357 => 357,
                358 => 358,
                359 => 359,
                360 => 360,
                361 => 361,
                362 => 362,
                363 => 363,
                364 => 364,
                365 => 365,
                366 => 366,
                367 => 367,
                368 => 368,
                369 => 369,
                370 => 370,
                371 => 371,
                372 => 372,
                373 => 373,
                374 => 374,
                375 => 375,
                376 => 376,
                377 => 377,
                378 => 378,
                379 => 379,
                380 => 380,
                381 => 381,
                382 => 382,
                383 => 383,
                384 => 384,
                385 => 385,
                386 => 386,
                387 => 387,
                388 => 388,
                389 => 389,
                390 => 390,
                391 => 391,
                392 => 392,
                393 => 393,
                394 => 394,
                395 => 395,
                396 => 396,
                397 => 397,
                398 => 398,
                399 => 399,
                400 => 400,
                401 => 401,
                402 => 402,
                403 => 403,
                404 => 404,
                405 => 405,
                406 => 406,
                407 => 407,
                408 => 408,
                409 => 409,
                410 => 410,
                411 => 411,
                412 => 412,
                413 => 413,
                414 => 414,
                415 => 415,
                416 => 416,
                417 => 417,
                418 => 418,
                419 => 419,
                420 => 420,
                421 => 421,
                422 => 422,
                423 => 423,
                424 => 424,
                425 => 425,
                426 => 426,
                427 => 427,
                428 => 428,
                429 => 429,
                430 => 430,
                431 => 431,
                432 => 432,
                433 => 433,
                434 => 434,
                435 => 435,
                436 => 436,
                437 => 437,
                438 => 438,
                439 => 439,
                440 => 440,
                441 => 441,
                442 => 442,
                443 => 443,
                444 => 444,
                445 => 445,
                446 => 446,
                447 => 447,
                448 => 448,
                449 => 449,
                450 => 450,
                451 => 451,
                452 => 452,
                453 => 453,
                454 => 454,
                455 => 455,
                456 => 456,
                457 => 457,
                458 => 458,
                459 => 459,
                460 => 460,
                461 => 461,
                462 => 462,
                463 => 463,
                464 => 464,
                465 => 465,
                466 => 466,
                467 => 467,
                468 => 468,
                469 => 469,
                470 => 470,
                471 => 471,
                472 => 472,
                473 => 473,
                474 => 474,
                475 => 475,
                476 => 476,
                477 => 477,
                478 => 478,
                479 => 479,
                480 => 480,
                481 => 481,
                482 => 482,
                483 => 483,
                484 => 484,
                485 => 485,
                486 => 486,
                487 => 487,
                488 => 488,
                489 => 489,
                490 => 490,
                491 => 491,
                492 => 492,
                493 => 493,
                494 => 494,
                495 => 495,
                496 => 496,
                497 => 497,
                498 => 498,
                499 => 499,
                500 => 500,
                501 => 501,
                502 => 502,
                503 => 503,
                504 => 504,
                505 => 505,
                506 => 506,
                507 => 507,
                508 => 508,
                509 => 509,
                510 => 510,
                511 => 511,
                512 => 512,
                513 => 513,
            };
    }
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $db->prepare("SELECT 1");
}
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
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
$callable($nodes);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$list = [];
$list[] = $it->getSubPathname();
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
var_dump($s);
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
class MySessionHandler implements SessionHandlerInterface {
    function open($save_path, $session_name): bool {
        return true;
    }

    function close(): bool {
        die("close: goodbye cruel world\n");
    }

    function read($id): string|false {
        return '';
    }

    function write($id, $session_data): bool {
        die("write: goodbye cruel world\n");
    }

    function destroy($id): bool {
        return true;
    }

    function gc($maxlifetime): int {
        return 1;
    }
}
session_set_save_handler(new MySessionHandler());
$ftp = ftp_connect('127.0.0.1', $port);
$arr = array(
0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
0x2020 => array(0x86, "DAGGER"),
0x2021 => array(0x87, "DOUBLE DAGGER"),
0x20AC => array(0x88, "EURO SIGN"),
0x2030 => array(0x89, "PER MILLE SIGN"),
0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
0x2022 => array(0x95, "BULLET"),
0x2013 => array(0x96, "EN DASH"),
0x2014 => array(0x97, "EM DASH"),
//0x98	      	#UNDEFINED
0x2122 => array(0x99, "TRADE MARK SIGN"),
0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
0x00A0 => array(0xA0, "NO-BREAK SPACE"),
0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
0x00A4 => array(0xA4, "CURRENCY SIGN"),
0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
0x00A6 => array(0xA6, "BROKEN BAR"),
0x00A7 => array(0xA7, "SECTION SIGN"),
0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x00AC => array(0xAC, "NOT SIGN"),
0x00AD => array(0xAD, "SOFT HYPHEN"),
0x00AE => array(0xAE, "REGISTERED SIGN"),
0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
0x00B0 => array(0xB0, "DEGREE SIGN"),
0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
0x00B5 => array(0xB5, "MICRO SIGN"),
0x00B6 => array(0xB6, "PILCROW SIGN"),
0x00B7 => array(0xB7, "MIDDLE DOT"),
0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
0x2116 => array(0xB9, "NUMERO SIGN"),
0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
);
foreach ($arr as $u => $v) {
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $d = unpack("H*", $res);
    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);

    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    if ($res[0] != "&" || $res[1] != "#")
        $res = unpack("H*", $res)[1];
    echo sprintf("%s => %s\n\n", $ent, $res);
}
$ent = sprintf("&#x%X;", $u);
$res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
$d = unpack("H*", $res);
var_dump( $count );
$arg = new Stdclass();
print_r($arg);
class C {
    public int $a;
}
$obj = new C();
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$result->close();
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
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
$bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
$bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
    $cdata = $ffi->new('int32_t');
    $cdata->cdata = $val;
    return $cdata;
};
$thirty = M_PI / 6.0;
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
$c("abc");
var_dump($row[0]);
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$heredoc = <<<EOT
hello world
EOT;
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
function f_6() {
    class cr {
        private $priv_member;
        function __construct($val) {
            $this->priv_member = $val;
        }
        static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
        static function comp_func_cr2($a, $b) {
            echo ".";
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member < $b->priv_member) ? 1 : -1;
        }
        function dump() {
            echo $this->priv_member . "\n";
        }
    }
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $im = imagecreate(10,10);
}
function f_7() {
    $res = [];
    $dir = opendir('foo://bar');
}
function f_8() {
    $tbl = "test";
    $sql = "SELECT bit_column_1 FROM $tbl";
    $date2 = new DateTime("Sat 19 November 2011");
}
function f_9() {
    $interval = new DateInterval('P1D');
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, -1));
    var_dump($br);
    class C {
        public function __toString() {
            global $c;
            $c = [];
            throw new Exception(__METHOD__);
        }
    }
    $c = new C();
    var_dump ( $vars );
    var_dump(pack('x') === "\0");
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    unlink($trace_file);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "SELECT bit_column_1 FROM $tbl";
    $result = $mysqli->query($sql);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
    class foo
    {
    // no members
    }
    $this->public_var1 = new foo();
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->query("DROP TABLE temp");
}
for ($i_10 = 0; $i_10 < 10; $i_10++) {
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    $test = array("A\x00B" => "Hello world");
    var_dump($test);
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
}
function f_11() {
    $ch = curl_init();
}
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
foreach( $strings_with_nulls as $string )  {
  echo "\n--- Iteration $counter ---\n";
  var_dump( strtok($string, "\0") );
  for($count = 1; $count <= 5; $count++)  {
    var_dump( strtok("\0") );
  }
  $counter++;
}
var_dump( strtok($string, "\0") );
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$bytes = str_repeat("*", 65536);
$output = deflate_add(
        $deflator,
        $bytes,
        ZLIB_SYNC_FLUSH
    );
$depth2 = "depth2";
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
test($nodes, "asXml", fn ($n) => $n->asXml());
ob_flush();
$strA = 'test &amp; test';
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
