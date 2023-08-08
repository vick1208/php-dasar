<?php

$countWhile = 1;

while ($countWhile <= 5) {
    echo "loop ke-$countWhile" . PHP_EOL;
    $countWhile++;
}

$counter = 50;
do {
    echo "loop ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

$countBr = 1;

while (true) {
    echo "Ini adalah for while ke-$countBr" . PHP_EOL;
    $countBr++;

    if ($countBr > 10) {
        break;
    }
}


