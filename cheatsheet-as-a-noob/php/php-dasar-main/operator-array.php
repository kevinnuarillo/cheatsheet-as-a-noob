<?php

$food = [
  "pizza" => 10.0
];

$drink = [
  "coffee" => 3.0
];

$total = $food + $drink;
var_dump($total);

$fruit1 = [
  "red" => "apple",
  "yellow" => "pineaple"
];

$fruit2 = [
  "yellow" => "pineaple",
  "red" => "apple"
];

var_dump($fruit1 == $fruit2);
var_dump($fruit1 === $fruit2);