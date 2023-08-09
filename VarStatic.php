<?php

/**
 * incrementing
 *
 * @return void
 */
function incrementing()
{
    static $counter = 1; #static scope

    echo "Counter >> $counter" . PHP_EOL;

    $counter++;
}

incrementing();
incrementing();
incrementing();
incrementing();
