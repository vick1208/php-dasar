<?php
#mirip dengan anonymous function
$firstName = "Adam";
$lastName = "Wathan";


$funcAnon = function () use ($firstName,$lastName) : string{
   return "Hi $firstName $lastName" . PHP_EOL;
};

$arrowFunc = fn () => "Hi $firstName $lastName" . PHP_EOL;
echo $arrowFunc();
echo $funcAnon();