<?php

$set = true;

if ($set) {    
    /**
     * sayHello
     *
     * @return void
     */
    function sayHello()
    {
        echo "Hello Function" . PHP_EOL;
    }
}
sayHello();

/**
 * sum
 *
 * @param  mixed $first
 * @param  mixed $second
 * @return int
 */
function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

/**
 * getFinalValue
 *
 * @param  mixed $value
 * @return string
 */
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
    # statement setelah return tidak akan dieksekusi
    // echo "Lah";
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);
