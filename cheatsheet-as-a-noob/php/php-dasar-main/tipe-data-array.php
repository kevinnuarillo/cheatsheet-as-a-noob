<?php

$arrayString = array("Mario", "Zelda", "Kirby");
$arrayInteger = [1, 2, 3, 4];
$arrayMix = [true, "Two", 3, 4.5];

echo "Array String : ";
var_dump($arrayString);
echo "\n";

echo "Array Integer : ";
var_dump($arrayInteger);
echo "\n";

echo "Array Mix : ";
var_dump($arrayMix);
echo "\n";

var_dump($arrayString[1]);

$arrayString[2] = "Peach";
var_dump($arrayString);

unset($arrayString[2]);
var_dump($arrayString);

$arrayString[] = "Kirby";
var_dump($arrayString);

var_dump(count($arrayString));

$cloud = array(
  "name" => "Cloud Strife",
  "class" => "Ex-Soldier",
  "game" => "Final Fantasy VII",
  "platform" => array(
    1997 => "Playstation 1",
    2013 => "Steam/Android/iOS",
    2020 => "Playstation 4"
  )
);

var_dump($cloud);
var_dump($cloud["game"]);
var_dump($cloud["platform"][2020]);
echo "\n";
$cecil = [
  "name" => "Cecil Harvey",
  "class" => "Dark Knight",
  "game" => "Final Fantasy IV",
  "platform" => [
    1994 => "SNES",
    2000 => "Playstation 1",
    2003 => "Gameboy Advance",
    2005 => "Playstation Portable",
    2006 => "Nintendo DS"
  ]
];

var_dump($cecil);
var_dump($cecil["name"]);
var_dump($cecil["platform"][2005]);