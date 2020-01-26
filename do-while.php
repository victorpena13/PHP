<?php


//exercise 1
$two = -1;
do {
    $two++;
    if ($two % 2 == 0) {
        echo $two . "\n";
    }
} while ($two <= 100);

//exercise 2
$oneHundred = 105;

do {
    $oneHundred--;
    if ($oneHundred % 5 == 0) {
        echo $oneHundred . "\n";
    }
} while ($oneHundred >= -10);

//exercise 3
$a = 2;

do {
    $a = $a * $a . "\n";
    echo $a;
} while ($a <= 1000000);