<?php

$name = "EKO";
$name = null;

$age = null;

echo "Name : " . $name . PHP_EOL;
echo "Age : " . $age . PHP_EOL;

// $name = "Vicky";
echo "Is var name null?:" ;
var_dump(is_null($name));

$misal = "Apapun";
unset($misal);
$misal = "Ojeka";
$misal = null;
var_dump(isset($misal));