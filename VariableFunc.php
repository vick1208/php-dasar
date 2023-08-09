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

/**
 * sayHello
 *
 * @param  mixed $name
 * @param  mixed $filter
 * @return void
 */
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

/**
 * sampleFunction
 *
 * @param  mixed $name
 * @return string
 */
function sampleFunction(string $name):string{
 return "Sample $name";
}

sayHello("Edhi","sampleFunction");
sayHello("Edhi","strtolower");
