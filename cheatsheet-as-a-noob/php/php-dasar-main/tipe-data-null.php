<?php

$name = "Ryujin";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo '$name variable is null? : ';
var_dump(is_null($name));

$example = "Yuna";
unset($example);

$example = "Kevin";
var_dump(isset($example));