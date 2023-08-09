<?php

$name = "Dar"; #global scope

/**
 * sayHi
 *
 * @return void
 */
function sayHi()
{
    global $name; #global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;
}

sayHi();
