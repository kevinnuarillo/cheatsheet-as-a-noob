<?php

$nilai = 70;
$absen = 90;

/* if && Else*/
if ($nilai >= 75 && $absen >= 75) {
  echo "Kamu dinyatakan lulus!" . PHP_EOL;
} else {
  echo "Anda tidak lulus" . PHP_EOL;
}

/* Else If */
for ($i = 1; $i <= 100; $i++) {
   if ($i % 3 === 0 && $i % 5 === 0){
     echo "Fizz Buzz!" . PHP_EOL;
   } else if ($i % 5 === 0) {
     echo "FIZZ" . PHP_EOL;
   } else if ($i % 3 === 0) {
     echo "BUZZ" . PHP_EOL;
   } else {
     echo $i . PHP_EOL;
   }
}
