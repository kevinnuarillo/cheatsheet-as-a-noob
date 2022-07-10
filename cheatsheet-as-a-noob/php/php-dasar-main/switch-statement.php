<?php

$nilai = "A";

switch ($nilai) {
  case "A":
    echo "Selamat anda lulus dengan baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus yey" . PHP_EOL;
    break;
  case "D":
    echo "Anda Tidak Lulus" . PHP_EOL;
  default:
    echo "Ganti jurusan gih" . PHP_EOL;
    break;
}