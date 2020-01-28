<?php

fwrite(STDOUT, 'enter first value: ');
$firstNum = fgets(STDIN);

fwrite(STDOUT, 'enter second value: ');
$secondNum = fgets(STDIN);

fwrite(STDOUT, 'Enter an amount to increment by: ');
$increment = fgets(STDIN);

for ($a = $firstNum; $a <= $secondNum; $a+=$increment) {
    echo $a . "\n";
}