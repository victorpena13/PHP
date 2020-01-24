<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
echo "{$x}  > {$y}  >  {$z}\n";

// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".

if (0  < $x || $x < 10) {
    echo "0 is less than {$x} OR {$x} is less than 10\n";
}

// TODO:
// repeat the if statement for $y and $z.

if (0< $y || $y < 5) {
    echo "0 is less than {$y} OR {$y} is less than 10\n";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".

if (0 < $z && $z <= 10) {
    echo "0 is less than {$z} AND {$z} is less than 10\n";
}

// TODO:
// repeat the if statement for $y and $z.

if ($y < $z && $y < 10) {
    echo "0 is less than {$y} AND {$y} is less than 10\n";
}

// the output should read as follows:
// 0 < 5 < 10
// 0 is less than 0 OR 0 is less than 10
// 0 is less than 5 OR 5 is less than 10
// 0 is less than 10 OR 10 is less than 10
// 0 is less than 5 AND 5 is less than 10