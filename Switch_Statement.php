<?php

$nilai = "E";

// Cara yang direkomendasikan 
switch ($nilai) {
    case "A":
        echo "Anda lulus dgn sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus dgn baik" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulusan" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
        break;
}

switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;

endswitch;
