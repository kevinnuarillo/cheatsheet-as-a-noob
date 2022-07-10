<?php

/* Manipulasi String Menggunakan titik (.) */

$buah = "Apel";
echo "Buah : " . $buah . PHP_EOL;

$warna = ["Merah", "Biru", "Kuning", "Hijau"];
echo "Warna : " . $warna[0] . PHP_EOL;

/* Konversi Tipe data */

$toString = (string)777;
var_dump($toString);

$toInt = (int)"777";
var_dump($toInt);

$toFloat = (float)" 77.7";
var_dump($toFloat);

/* Akses Karakter */

$name = "Ryuji";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

/* Variable parsing */
echo "Hello $name, Happy Weekend!" . PHP_EOL;
/* Curly Brace */
echo "Hello {$name}n, Happy Weekday!" . PHP_EOL;