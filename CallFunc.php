<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko","strtoupper");
sayHello("Eko","strtolower");
sayHello("Adam",function (string $name):string {
    return strtolower($name);
});
sayHello("Adam",fn($name)=> strtoupper($name));

