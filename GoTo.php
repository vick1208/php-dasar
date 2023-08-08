<?php

goto al;
echo "alpha" . PHP_EOL;

al:
echo "Hello A" . PHP_EOL;


/* 
Sebaiknya jangan sering pakai goto statement 
karena kodingan akan membingungkan pembaca.
*/
$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 5) {
        goto end;
    }
}

end:
echo "End Loop";