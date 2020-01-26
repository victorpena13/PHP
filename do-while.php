<?php

$two = -1;
do {
    $two++;
    if ($two % 2 == 0) {
        echo $two . "\n";
    } else {
        echo "";
    }
} while ($two <= 100);


$oneHundred = 105;

do {
    $oneHundred--;
    if ($oneHundred % 5 == 0) {
        echo $oneHundred . "\n";
    } else {
        echo "";
    }
} while ($oneHundred >= -10);