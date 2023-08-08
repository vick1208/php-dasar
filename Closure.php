<?php
# Closure atau Anonymous Function

$sayHi = function (string $name) {
    echo "Hi $name" . PHP_EOL;
};

$sayHi("Eko");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name):string {
    return strtoupper($name);
});

$filterFunc = function (string $name):string {
    return strtoupper($name);
};

sayGoodBye("Eric",$filterFunc);


$firstName = "Adam";
$lastName = "Wathan";

$sayHiAdam = function () use ($firstName,$lastName) {
 echo "Hi $firstName $lastName" . PHP_EOL;   
};

$sayHiAdam();

