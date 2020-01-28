<?php

fwrite(STDOUT, 'press enter to begin ');
$play = fgets(STDIN);

    fwrite(STDOUT, 'enter a starting number: ');
    $firstNum = fgets(STDIN);
    if (is_numeric($firstNum)) {
        fwrite(STDOUT, 'enter second value: ');
        $secondNum = fgets(STDIN);
    } else {
        echo "That is not a number\n";
    }

    if (is_numeric($secondNum)) {
        fwrite(STDOUT, 'Enter an amount to increment by: ');
        $increment = fgets(STDIN);
    } else {
        echo "That is not a number\n";
    }

    if (is_numeric($increment)) {
        for ($a = $firstNum; $a <= $secondNum; $a+=$increment) {
            echo $a . "\n";
        }
}










