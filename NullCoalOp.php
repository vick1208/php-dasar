<?php

$data = [
    "action" => "Delete"
];
// Null Coalescing Operator
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
