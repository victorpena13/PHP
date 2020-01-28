<?php
for ($a = 0; $a <= 100; $a++) {
    if ($a % 3 == 0) {
        echo "fizz\n";
    } else if ($a % 5 == 0) {
        echo "buzz\n";
    } else if (($a % 5 ==0 && $a % 3 == 0)) {
        echo "FizzBuzz\n";
    } else {
        echo $a . "\n";
    }
}
