<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataRes = array_map(fn (int $value) => $value * 5, $data);
var_dump($dataRes);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Edwin",
    "last_name" => "Susanto"
];
var_dump(array_keys($person));
var_dump(array_values($person));
