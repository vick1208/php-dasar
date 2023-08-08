<?php

$name = "Dar"; #global scope

function sayHi()
{
    global $name; #global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;
}

sayHi();
