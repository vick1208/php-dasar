<?php

// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "loop ke-$counter" . PHP_EOL;
// }
// for ($counter = 10; $counter >= 1; $counter--) {
//     echo "loop ke-$counter" . PHP_EOL;
// }
// for($counter = 1; $counter <= 10; $counter++):
//     echo "loop ke-$counter".PHP_EOL;
// endfor;



for ($counter = 1; $counter <= 100; $counter++) {
    if($counter % 2 == 0){
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}