<?php

$name = "Eko";

$othName = &$name;
$othName = "John";
echo $name . PHP_EOL;

/**
 * increment
 *
 * @param  mixed $value
 * @return void
 */
function increment(int &$value)
{
    $value++;
}

$count = 1;
increment($count);
echo $count . PHP_EOL;

function &getVal()
{
    static $value = 100;
    return $value;
}

$a = &getVal();
$a = 150;

$b = &getVal();

echo $b . PHP_EOL;
