<?php

/**
 * factorialLoop
 *
 * @param  mixed $value
 * @return int
 */
function factorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(6));
var_dump(6 * 5 * 4 * 3 * 2 * 1);

/**
 * factorialRec
 *
 * @param  mixed $value
 * @return int
 */
function factorialRec(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRec($value - 1);
    }
}
var_dump(factorialRec(6));

/* 
Kekurangan dari recursive function adalah 
memori komputer akan mengalami stackoverflow error
jika proses rekursif dilakukan secara intensif
*/


/**
 * terusLoop
 *
 * @param  mixed $value
 * @return void
 */
function terusLoop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        terusLoop($value - 1);
    }
}

terusLoop(3000000);
