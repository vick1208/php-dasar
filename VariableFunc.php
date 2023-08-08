<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}
function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionCalled = "foo";
$functionCalled();
$functionCalled = "bar";
$functionCalled();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name):string{
 return "Sample $name";
}

sayHello("Edhi","sampleFunction");
sayHello("Edhi","strtolower");
